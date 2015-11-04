var _navigation;

var Navigation = function()
{

  var _click = ('touchend' in document.documentElement ? "touchend" : "click");

  var document_page             = $(document);
  var bg                        = null;
  var bg_width                  = null;
  var document_width            = null;
  var document_height           = null;
  var buffer_x                  = null;
  var mouse_move_reference      = null;
  var xPrev                     = null;
  var angleBG                     = null;

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // MAKE LISTED FUNCTIONS A PUBLIC
  // ------------------------------------------------------------------------------------------------------------------------------------------------------------

  return {
    init : _init,
    click: _click,
    activemousemove: _activemousemove,
    disablemousemove: _disablemousemove
  };

  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // INIT
  // ------------------------------------------------------------------------------------------------------------------------------------------------------------

  function _init(){ 
    _activemousemove();
    $(document).on('page_change', _check);
  }

  function _check(e, current_page, type)
  { 
    if(type == 'reinit') _reInit(current_page);
  }

  function _reInit(page){ 
    document_page             = $(document);
    bg                        = page.find('.bg_page');
    bg_width                  = bg.width();
    document_width            = document_page.width();
    document_height           = document_page.height();
    buffer_x                  = bg_width - document_width;
    mouse_move_reference      = $('#mouse_move_reference');
    angleBG                   = (agent_browser == 'Firefox') ? 15 : 30;
    x_acceleration            = 0;
    step_x                    = 25;
    
    TweenMax.set(bg, { x: -buffer_x/2 });
  }

  function _disablemousemove()
  {
    document_page.unbind('mousemove');
  }

  function _activemousemove()
  {   
    //if(!agent_isMobile) {

      document_page.mousemove(function(e){
         
        // var bg_rotation = _calculateDistance(mouse_move_reference, e.pageX, e.pageY, angleBG, angleBG);
        // TweenMax.to(bg, .3, { overwrite:"all", rotationY: bg_rotation.x, rotationX: bg_rotation.y });

        x_acceleration = _calculateDistance(mouse_move_reference, e.pageX, e.pageY, step_x, step_x);
        x_acceleration_abs = Math.abs(x_acceleration.x);

        if(x_acceleration.x > 0) { 
          TweenMax.to(bg, .1, { overwrite:"all", x: '-=' + x_acceleration_abs, ease: Linear.easeNone, onUpdate: _verifBorder, onComplete: _continueSlide, onCompleteParams: ['-', x_acceleration_abs] });
        }
        else {
          TweenMax.to(bg, .1, { overwrite:"all", x: '+=' + x_acceleration_abs, ease: Linear.easeNone, onUpdate: _verifBorder, onComplete: _continueSlide, onCompleteParams: ['+', x_acceleration_abs] });
        }

      });
    //}
  }

  function _continueSlide(direction, x)
  {
    TweenMax.to(bg, .1, { overwrite:"all", x: direction + '=' + x, onUpdate: _verifBorder, ease: Linear.easeNone, onComplete: _continueSlide, onCompleteParams: [direction, x] });
  }

  function _verifBorder()
  {
    var x = this._targets[0]._gsTransform.x.toFixed(2);

    if(x > 0 )
      TweenMax.set(bg, { x: 0 });

    if(x < -buffer_x )
      TweenMax.set(bg, { x: -buffer_x });
  }


  // ------------------------------------------------------------------------------------------------------------------------------------------------------------
  // tools
  // ------------------------------------------------------------------------------------------------------------------------------------------------------------

  function _calculateDistance(elem, mouseX, mouseY, maxX, maxY) {
    var x = Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2)));
    var y = Math.floor(Math.sqrt(Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));

    if(mouseX < document_width/2) x = x*-1;
    if(mouseY > document_height/2) y = y*-1;

    maxX = (x/document_width)*maxX*2;
    maxY = (y/document_height)*maxY*2;

    return { x: maxX, y: maxY }
    // return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
  }

};
