<?php namespace App\Http\Middleware;

use App;
use View;
use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LangAutoDetection {

	/**
     * The availables languages.
     *
     * @array Lang
     */
    protected $lang = ['fr', 'en'];

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        //Session::flush();
        Session::set('locale', 'fr');

        if( !Session::has('locale') ) { 

            /**
             * Get the browser local code and lang code.
             */
            $localCode = $request->getPreferredLanguage();
            $localLang = substr($localCode, 0, 2);

            if( in_array($localLang, $this->lang) ) {
                Session::set('locale', $localLang);
            }else{
                Session::set('locale', Config::get('app.locale'));
            }
        }        

        /**
         * Set the local config.
         */
        App::setLocale(Session::get('locale'));
        Config::set('app.locale', Session::get('locale'));

        /**
         * Share variables in view.
         */
        if(Config::get('app.locale') == 'fr') {
            View::share([
                'lang' => 'fr',
                'langreverse' => 'en'
            ]);
        } else {
            View::share([
                'lang' => 'en',
                'langreverse' => 'fr'
            ]);
        }

        return $next($request);

	}

}