var _page_works;

var pageWorks = function()
{
  var page_id = 'works';
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
    document.title = page.find('.page_title').val();

    TweenLite.set(".wrapper", {perspective:400});
    TweenLite.set(".back", {rotationX:180});
    TweenLite.set([".back", ".front"], {backfaceVisibility:"hidden"});

    (function($) {
        $.fn.clickToggle = function(func1, func2) {
            var funcs = [func1, func2];
            this.data('toggleclicked', 0);
            this.click(function() {
                var data = $(this).data();
                var tc = data.toggleclicked;
                $.proxy(funcs[tc], this)();
                data.toggleclicked = (tc + 1) % 2;
            });
            return this;
        };
    }(jQuery));

    page.find('.wrapper').clickToggle(function() {
      var wrapper = $(this);
      TweenMax.to(wrapper, .5, { scaleX: .9, scaleY: .9, ease: Expo.easeOut, onComplete: function(){
        TweenMax.to(wrapper.find('.front'), .5, { alpha: 0, ease: Expo.easeOut, delay: .5 });
        TweenLite.to(wrapper.find('.card'), 1, {rotationX:-180, transformOrigin:"left 270px", transformStyle:"preserve-3d", ease:Back.easeInOut, onComplete: function(){
          TweenMax.to(wrapper, .6, { scaleX: 1, scaleY: 1, ease: Expo.easeOut });
        }});
      }});
    }, function() {
      var wrapper = $(this);
      TweenMax.to(wrapper, .5, { scaleX: .9, scaleY: .9, ease: Expo.easeOut, onComplete: function(){
        TweenMax.to(wrapper.find('.front'), .5, { alpha: 1, ease: Expo.easeOut, delay: .5 });
        TweenLite.to(wrapper.find('.card'), 1, {rotationX:-360, transformOrigin:"left 270px", transformStyle:"preserve-3d", ease:Back.easeInOut, onComplete: function(){
          TweenMax.to(wrapper, .6, { scaleX: 1, scaleY: 1, ease: Expo.easeOut});
        }});
      }});
    });  

    TweenMax.from(page.find('.cbp-ig-grid li:nth-child(3n)'), 1, { x: 200, alpha: 0, ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
    TweenMax.from(page.find('.cbp-ig-grid li:nth-child(3n-2)'), 1, { x: -200, alpha: 0, ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
    TweenMax.from(page.find('.cbp-ig-grid li:nth-child(3n-1)'), 1, { y: 200, alpha: 0, ease: Expo.easeOut, delay: _deeplink.delayBeforeAnimIn });
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation in

  function _animationIn()
  {
    TweenMax.from(page.find('.bg_page'), 1, { alpha: 0, ease: Linear.easeOut });
    _deeplink.reInitAnimation(_deeplink.delayReInit);
  }

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // animation out

  function _animationOut()
  {
    TweenMax.to(page.find('.cbp-ig-grid li:nth-child(3n)'), 1, { x: 200, alpha: 0, ease: Expo.easeOut });
    TweenMax.to(page.find('.cbp-ig-grid li:nth-child(3n-2)'), 1, { x: -200, alpha: 0, ease: Expo.easeOut });
    TweenMax.to(page.find('.cbp-ig-grid li:nth-child(3n-1)'), 1, { y: 200, alpha: 0, ease: Expo.easeOut });
  }

};