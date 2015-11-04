var _deeplink;

var Deeplink = function()
{

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // global vars

  var $main                = $( '#pt-main' ),
      $pages               = $main.children( 'div.pt-page' ),
      pagesCount           = $pages.length,
      current              = 0,
      zindex               = 1,
      $nextPage            = '',
      $currPage            = '',
      isAnimating          = false,
      delayBeforeAnimIn    = 1,
      delayReInit          = 2,
      $document            = $(document),
      firstload            = true,
      draggable            = null,
      chrome_ios           = (navigator.userAgent.match('CriOS')) ? false : true;

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // make listed functions a public

  return {
    init : _init,
    delayBeforeAnimIn : delayBeforeAnimIn,
    delayReInit: delayReInit,
    reInitAnimation : _reInitAnimation,
    getDraggable: _getDraggable,
  };

  function _getDraggable()
  {
    return draggable[0];
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // first init

  function _init(){
    $pages.each( function() {
      var $page = $( this );
      $page.data( 'originalClassList', $page.attr( 'class' ) );
    } );

    $pages.eq( current ).addClass( 'pt-page-current' );

    _updateBtnLang($pages.eq( current ).find('.page_lang_url_id').val());
    _hightlightMenu($pages.eq( current ).find('.page_menu_id').val());
    _customScrollbar($pages.eq( current ).find('.content_scroll'));

    _deeplink_event();

    $(window).resize(_onResize);

    $document.trigger('page_change', [ $pages.eq( current ), '', 'reinit' ] );
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // history deeplink

  function _deeplink_event()
  {  
    $( document ).on('click', ".ajax", function(e) {
      if( isAnimating ) return false;
      isAnimating = true;

      /*if(globalJS.agent_browser == 'IE' && globalJS.agent_browser_version <= 9)
      {
        // do nothing
      }
      else
      {*/
        history.pushState(null, null, this.href );
        _ajaxCall(this.href); 
        return false;
      //}
    });

    $(window).on('popstate', function(e) {
      if (firstload) return;
      var returnLocation = history.location || document.location;
      _ajaxCall(returnLocation.href);
    });
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // ajax call

  function _ajaxCall(url)
  {
    firstload = false;

    $.ajax({
      url: url,
      beforeSend: function(){
        // show loader
        TweenMax.killAll();
      },
      cache: chrome_ios,
      success: function(html) {
        _onBeforeReInit(html);
      }
    });

    // ga('send', 'pageview', { 'page' : window.location.pathname, 'title' : document.title });
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // tools like update lang url / highlight menu / create new scroll container

  function _updateBtnLang(url)
  {
    $('#navigation .lang a').attr('href', url);
  }

  function _hightlightMenu(menu)
  {
    TweenMax.to($('#navigation .btn_nav'), 1, {className:"-=active"});
    TweenMax.to($('#navigation .btn_nav.' + menu), 1, {className:"+=active"});
  }

  function _customScrollbar(page)
  {
    _verifScrollBar(page);

    // draggable = Draggable.create(page, 
    // {
    //   type:"scrollTop", 
    //   edgeResistance:0.8, 
    //   throwProps:true, 
    //   cursor: 'default'
    // });
  }

  function _verifScrollBar(page)
  {
    hasVerticalScrollbar =  page.find('.content').width() !=  page.width();
    if(hasVerticalScrollbar)
      _hideScrollBar(page)
    else
      _showScrollBar(page);
  }

  function _hideScrollBar(page)
  {
    page.css({'right' : page.find('.content').width() - page.width() + 'px' })
  }

  function _showScrollBar(page)
  {
    page.css({'right' : '0px' })
  }

  function _onResize()
  {
    _verifScrollBar($pages.eq( current ).find('.content_scroll'));
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // after ajax call and before animation in out

  function _onBeforeReInit(html) 
  {
    $('.pt-page').not('.pt-page-current').css({opacity: 0}).html(html);

    $currPage = $pages.eq( current );
    ( current < pagesCount - 1 ) ? ++current : current = 0;
    $nextPage = $pages.eq( current ).addClass( 'pt-page-current' );
    //alert($currPage.name);
    $nextPage.css({ zIndex: zindex++ });

    TweenMax.to($nextPage, .2, {opacity: 1});

    _customScrollbar($nextPage.find('.content_scroll'))
    _updateBtnLang($nextPage.find('.page_lang_url_id').val());
    _hightlightMenu($nextPage.find('.page_menu_id').val());

    $document.trigger('page_change', [ $currPage, $nextPage, 'animation_out' ] );
    $document.trigger('page_change', [ $nextPage, $currPage, 'animation_in' ] );
    $document.trigger('page_change', [ $nextPage, $currPage, 'reinit' ] );
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // reinit

  function _reInitAnimation(delay)
  {
    TweenMax.delayedCall(delay, function(){
      isAnimating = false;

      $currPage.attr( 'class', $currPage.data( 'originalClassList' ) ).empty();
      $nextPage.attr( 'class', $nextPage.data( 'originalClassList' ) + ' pt-page-current' );
    });
  }

};
