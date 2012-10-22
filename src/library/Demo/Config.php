<?PHP   
class Demo_Config extends Su_Config
{ 
    /**
     * app configure
     */
	protected function __construct()
	{   
        // mysql pdo
        $conf['pdo'] = '';

		$this->data = $conf;   
	}

	/**
	 * single 单例调用的实现   
	 */ 
	public static function single() 
	{ 
		static $instance;      
		return $instance ? $instance : ($instance = new self());
	} 
}
