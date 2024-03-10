<?php
	/**
 * Copyright (C) Apis Networks, Inc - All Rights Reserved.
 *
 * Unauthorized copying of this file, via any medium, is
 * strictly prohibited without consent. Any dissemination of
 * material herein is prohibited.
 *
 * For licensing inquiries email <licensing@apisnetworks.com>
 *
 * Written by Matt Saladna <matt@apisnetworks.com>, August 2020
 */

	namespace Module\Support\Webapps\App\Type\Invoiceninja;

	use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

	class Handler extends Unknown
	{
		const NAME = 'Invoice Ninja';
		const ADMIN_PATH = '/admin';
		const LINK = 'https://invoiceninja.com/';

		const DEFAULT_FORTIFICATION = 'max';
		const FEAT_ALLOW_SSL = true;
		const FEAT_RECOVERY = false;
		const APP_ROOT_DEPTH = 1;

		const TRANSIENT_RECONFIGURABLES = [];

		public function display(): bool
		{
			return $this->php_jailed() && version_compare($this->php_version(), '8.1', '>=');
		}
	}