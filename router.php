<?php
class Router
{
    /**
     * An array of the routes keyed by URI.
     *
     * @var array
     */
    protected $routes = [];
    /**
     * An array of view paths to search for views.
     *
     * @var array
     */
    protected $viewPaths = [
      '',
      'interns/'
    ];
    /**
     * Create an instance of the router.
     *
     * @return void;
    */
    public function __construct()
    {
        $this->basePath = __DIR__ . DIRECTORY_SEPARATOR;
    }
    /**
     * Add a route to the routes collection.
     *
     * @param  array|string  $url
     * @param  string|null  $view
     * @return this
     */
    public function add($url, $view = null)
    {
        if (func_num_args() === 1 && is_array($url)) {
            foreach ($url as $path => $view) {
                $this->routes[$path] = $view;
            }
            return $this;
        }
        $this->routes[$url] = $view;
        return $this;
    }
    /**
     * Find the route that match the request url.
     *
     * @param string  $url
     * @return string
     */
    public function match($url)
    {
        // We'll first look through the list of defined routes
        // and if there's a match, we'll just return that, otherwise,
        // we'll search through the viewpaths to look for a view matching the
        // route.
        if (isset($this->routes[$url])) {
            return $this->getViewPath().$this->routes[$url];
        }

        preg_match('/(.*\/(.*))/', $url, $matches);
        foreach ($this->viewPaths as $path) {
            if (@file_exists($matchedPath = $this->getViewPath($path).$path.end($matches).'.php')) {
                return $matchedPath;
            }
        }
        return $this->getViewPath().'404.php';
    }
    /**
     * Get the path to the views.
     *
     * @return string
     */
    protected function getViewPath()
    {
        return $this->basePath.'views/';
    }
}