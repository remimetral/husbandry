var _page_about;

var pageAbout = function()
{
  var page_id = 'about';
  var $document = $(document);
  var page = null;
  var last = null;

  var word_list = [
    {text: "Veille", weight: 13},
    {text: "Artistique", weight: 10},
    {text: "Technologique", weight: 10},
    {text: "Photographie", weight: 9},
    {text: "Dessin", weight: 8},
    {text: "Street Art", weight: 6},
    {text: "Gulp", weight: 5, link: {href: "http://gulpjs.com", target: "_blank"}},
    {text: "Less", weight: 5, link: {href: "http://lesscss.org", target: "_blank"}},
    {text: "Sass", weight: 5, link: {href: "http://sass-lang.com", target: "_blank"}},    
    {text: "Montagne", weight: 5},
    {text: "Ski", weight: 4},
    {text: "Snow Board", weight: 4},
    {text: "Pêche", weight: 3},
    {text: "Musique", weight: 3},
    {text: "Composition", weight: 3},
    {text: "Arrangement", weight: 3},
    {text: "Football", weight: 3},
    {text: "Capoeïra", weight: 3},
    {text: "Cirque", weight: 3},
  ];

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
    last = last_page;
    
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
    document.title = page.find('.page_title').val();
    //TweenMax.from(page.find('.img'), 1, { delay: 1, scaleX: .8, scaleY: .8, ease: Back.easeOut, repeat: -1, yoyo: true });

    page.find('.title').click(function(){
      page.find('.title').css('pointer-events', 'auto');
      $(this).css('pointer-events', 'none');
      TweenMax.to(page.find('.text'), 1, { className: '-=active', ease: Expo.easeOut });
      TweenMax.to($(this).next(), 1, { className: '+=active', ease: Expo.easeOut });
    });

    $(function() {
        page.find('.cloud').jQCloud(word_list);
    });
    
    if( last != '' ) {
      TweenMax.to(last.find('.container_page'), 2, { scaleX: .8, scaleY: .8, alpha: .8, ease: Expo.easeOut, onComplete: function(){
        TweenMax.to(page.find('.cover, .details'), 1, { className: '+=active',ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
      }});
    } else {
      TweenMax.to(page.find('.cover, .details'), 1, { className: '+=active',ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
    }
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation in

  function _animationIn()
  {
    TweenMax.to(page.find('.cover, .details'), 1, { className: '+=active',ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
    _deeplink.reInitAnimation(_deeplink.delayReInit);
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation out

  function _animationOut()
  {
    TweenMax.set(last.find('.container_page'), { scaleX: .8, scaleY: .8, alpha: .8});
    TweenMax.to(page.find('.cover, .details'), 1, { className: '-=active',ease: Expo.easeOut, onComplete: function(){
      TweenMax.to(last.find('.container_page'), 2, { scaleX: 1, scaleY: 1, alpha: 1, ease: Expo.easeOut });
    }});
    //TweenMax.fromTo(last.find('.container_page'), 1, { scaleX: .8, scaleY: .8, alpha: .8, ease: Expo.easeOut }, { scaleX: 1, scaleY: 1, alpha: 1, ease: Expo.easeOut });
  }

};
