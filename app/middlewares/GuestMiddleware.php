<?php

namespace app\middlewares;

use flight\Engine;

class GuestMiddleware {
	
	/** @var Engine */
	protected Engine $app;
	
	public function __construct(Engine $app)
	{
		$this->app = $app;
	}

	public function before(): void
	{	
		if ($this->app->cookie()->get('user_id') !== null) {
			$this->app->redirect($this->app->getUrl('admin.dashboard.index'));
		}
	}
}