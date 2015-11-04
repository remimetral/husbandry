var _page_home;

var pageHome = function()
{
  var page_id = 'home';
  var $document = $(document);
  var page = null;

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // make listed functions a public
  // ------------------------------------------------------------------------------------------------------------------------------------------------------------

  return {
    init : _init
  };

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // init

  function _init(){
    $document.on('page_change', _check);
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // check

  function _check(e, current_page, last_page, type)
  {
    if(current_page.find('.page_id').val() != page_id) return;

    page = current_page;
    
    switch(type)
    {
      case 'reinit':
        _reInit();
      break;
      case 'animation_in':
        _animationIn();
      break;
      case 'animation_out':
        _animationOut();
      break;
    }
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // init on load

  function _reInit()
  {
    $('.carousel').carousel({interval: 6000});
    //$('#cbp-qtrotator').cbpQTRotator({speed: 700, easing: 'ease', interval: 6000});
    document.title = page.find('.page_title').val();
    //TweenMax.to(page.find('.container_page'), 1, { scaleX: 1, scaleY: 1, alpha: 1, delay: 1, ease: Expo.easeOut });
    TweenMax.from(page.find('.container'), 1, { y: -200, alpha: 0, ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation in

  function _animationIn()
  {
    TweenMax.from(page.find('.bg_page'), 1, { alpha: 0, ease: Linear.easeOut });
    //TweenMax.from(page.find('.container'), 1, { y: -200, alpha: 0, ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
    _deeplink.reInitAnimation(_deeplink.delayReInit);
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation out

  function _animationOut()
  {
    //TweenMax.to(page.find('.bg_page'), 1, { alpha: 0, ease: Linear.easeIn });
    TweenMax.to(page.find('.container'), 1, { y: 200, alpha: 0, ease: Expo.easeOut });
    //TweenMax.to(page.find('.container_page'), 1, { scaleX: .8, scaleY: .8, alpha: .8 ,ease: Expo.easeOut});
  }

};
