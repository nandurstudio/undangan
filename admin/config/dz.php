<?php
     
   $CurrentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

	// Determine asset base URL (portable: works for subdirectory *and* vhost root deployments)
	$script_dir = isset($_SERVER['SCRIPT_NAME']) ? rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') : '';
	$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

	// Normalise to a leading-slash path when non-empty
	if ($script_dir !== '' && strpos($script_dir, '/') !== 0) {
		$script_dir = '/'.$script_dir;
	}

	// If the request URI does NOT contain the script_dir, the app is being served
	// from a vhost root (DocumentRoot already points to the app folder). In that
	// case asset base should be `/assets/` not `/$script_dir/assets/`.
	if ($script_dir !== '' && $uri !== '' && strpos($uri, $script_dir) !== 0) {
		$asset_base = '/assets/';
	} else {
		$asset_base = ($script_dir === '' || $script_dir === '/') ? '/assets/' : $script_dir . '/assets/';
	}

	$DexignZoneSettings = [
		'site_level' => [
			'site_title' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs',
			'favicon' => 'assets/images/favicon.png',
			'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
			'fonts' => [
	         'google' => [
	            'families' => [
	               'Poppins:300,400,500,600,700',
	            ]
	         ] 
	      ],
		   'asset_url' => $asset_base,
			'support_button' => true,
			'theme_option' => true,
		],
		'global' => [
			'css' => [
				'vendor/bootstrap-select/css/bootstrap-select.min.css',
				'css/style.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/js/bootstrap-select.min.js',
				],
				'bottom'=>[
					'js/custom.js',
					'js/dlabnav-init.js',
				],
			],
		],
		'pagelevel' => [
			'index' => [
					'css' => [
						'vendor/owl-carousel/owl.carousel.css'
					],
					'js' => [
						'vendor/counter/counter.min.js',
						'vendor/counter/waypoint.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/peity/jquery.peity.min.js',
						'js/dashboard/dashboard-1.js',
						'vendor/owl-carousel/owl.carousel.js',
					],
					'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
	
				'index-2' => [
					'css' => [
						'vendor/owl-carousel/owl.carousel.css'
					],
					'js' => [
						'vendor/counter/counter.min.js',
						'vendor/counter/waypoint.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/peity/jquery.peity.min.js',
						'js/dashboard/dashboard-1.js',
						'vendor/owl-carousel/owl.carousel.js',
					],
					'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'project-page' => [
					'css' => [
						'vendor/datatables/css/jquery.dataTables.min.css',
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Project',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'kanban' => [
					'css' => [
					],
					'js' => [
						'vendor/draggable/draggable.js',
					],
					'seo' => [
				'page_title' => 'Kanban',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'contacts' => [
					'css' => [
					],
					'js' => [
						
					],
					'seo' => [
				'page_title' => 'Contacts',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'calendar-page' => [
					'css' => [
						'vendor/fullcalendar/css/main.min.css'
					],
					'js' => [
						'vendor/moment/moment.min.js',
						'vendor/fullcalendar/js/main.min.js',
						'js/plugins-init/calendar.js',
					],
					'seo' => [
				'page_title' => 'Calendar',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				
				'message' => [
					'css' => [
						
					],
					'js' => [
						
					],
					'seo' => [
				'page_title' => 'Messages',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'customer-list' => [
					'css' => [
						'vendor/datatables/css/jquery.dataTables.min.css',
					],
					'js' => [
						'vendor/datatables/js/jquery.dataTables.min.js',
						'js/plugins-init/datatables.init.js',
					],
					'seo' => [
				'page_title' => 'Customer List',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'content-add' => [
					'css' => [
						'vendor/select2/css/select2.min.css'
					],
					'js' => [
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/ckeditor/ckeditor.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Content Add',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'email-template' => [
					'css' => [
						'vendor/select2/css/select2.min.css',
					],
					'js' => [
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Email Template',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'blog' => [
					'css' => [
						'vendor/select2/css/select2.min.css',
					],
					'js' => [
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Blog',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'add-email' => [
					'css' => [
						'vendor/datatables/css/jquery.dataTables.min.css',
						'vendor/select2/css/select2.min.css',
					],
					'js' => [
						'vendor/ckeditor/ckeditor.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
						'vendor/datatables/js/jquery.dataTables.min.js',
						'js/plugins-init/datatables.init.js',
					],
					'seo' => [
				'page_title' => 'Add Email',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'menu-1' => [
					'css' => [
						'vendor/select2/css/select2.min.css',
						'vendor/nestable2/css/jquery.nestable.min.css',
					],
					'js' => [
						'vendor/nestable2/js/jquery.nestable.min.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/nestable-init.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Menus',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'app-calender' => [
					'css' => [
						'vendor/fullcalendar/css/main.min.css'
					],
					'js' => [
						'vendor/moment/moment.min.js',
						'vendor/fullcalendar/js/main.min.js',
						'js/plugins-init/fullcalendar-init.js',
					],
					'seo' => [
				'page_title' => 'Calendar',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'app-profile' => [
					'css' => [
						'vendor/lightgallery/dist/css/lightgallery.css',
						'vendor/lightgallery/dist/css/lg-thumbnail.css',
						'vendor/lightgallery/dist/css/lg-zoom.css',
					],
					'js' => [
						'vendor/lightgallery/dist/lightgallery.min.js',
						'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
						'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
					],
					'seo' => [
				'page_title' => 'Profile',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
	
				'edit-profile' => [
					'css' => [
						'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
					],
					'js' => [
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
					],
					'seo' => [
				'page_title' => 'Edit Profile',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				
				'post-details' => [
					'css' => [
						'vendor/lightgallery/dist/css/lightgallery.css',
						'vendor/lightgallery/dist/css/lg-thumbnail.css',
						'vendor/lightgallery/dist/css/lg-zoom.css',
					],
					'js' => [
						'vendor/lightgallery/dist/lightgallery.min.js',
						'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
						'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
					],
					'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'add-blog' => [
					'css' => [
						'vendor/select2/css/select2.min.css',
						'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
					],
					'js' => [
						'vendor/select2/js/select2.full.min.js',
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/ckeditor/ckeditor.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Add Blog',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'blog-category' => [
					'css' => [
						'vendor/datatables/css/jquery.dataTables.min.css',
						
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Blog Category',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
	
				'chart-chartist' => [
					'css' => [
						'vendor/chartist/css/chartist.min.css'
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/chartist/js/chartist.min.js',
						'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
						'js/plugins-init/chartist-init.js',
					],
					'seo' => [
				'page_title' => 'Chartist',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'chart-chartjs' => [
					'css' => [
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'js/plugins-init/chartjs-init.js',
					],
					'seo' => [
				'page_title' => 'ChartJs',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'chart-flot' => [
					'css' => [
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/flot/jquery.flot.js',
						'vendor/flot/jquery.flot.pie.js',
						'vendor/flot/jquery.flot.resize.js',
						'vendor/flot-spline/jquery.flot.spline.min.js',
						'js/plugins-init/flot-init.js',
					],
					'seo' => [
				'page_title' => 'Flot Chart',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'chart-morris' => [
					'css' => [
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/raphael/raphael.min.js',
						'vendor/morris/morris.min.js',
						'js/plugins-init/morris-init.js',
					],
					'seo' => [
				'page_title' => 'Morris Chart',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'chart-peity' => [
					'css' => [
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/peity/jquery.peity.min.js',
						'js/plugins-init/piety-init.js',
					],
					'seo' => [
				'page_title' => 'Piety Chart',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'chart-sparkline' => [
					'css' => [
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/jquery-sparkline/jquery.sparkline.min.js',
						'js/plugins-init/sparkline-init.js',
					],
					'seo' => [
				'page_title' => 'Chart Sparkline',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-checkout' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Checkout',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-customers' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Customers',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-invoice' => [
					'css' => [
						'vendor/bootstrap-select/dist/css/bootstrap-select.min.css'
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Invoice',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-product-detail' => [
					'css' => [
						'vendor/star-rating/star-rating-svg.css',
					],
					'js' => [
						'vendor/star-rating/jquery.star-rating-svg.js',
					],
					'seo' => [
				'page_title' => 'Product Detail',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-product-grid' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Product Grid',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-product-list' => [
					'css' => [
						'vendor/star-rating/star-rating-svg.css'
					],
					'js' => [
						'vendor/star-rating/jquery.star-rating-svg.js'
					],
					'seo' => [
				'page_title' => 'Product list',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ecom-product-order' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Product Order',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'email-compose' => [
					'css' => [
						'vendor/dropzone/dist/dropzone.css'
					],
					'js' => [
						'vendor/dropzone/dist/dropzone.js'
					],
					'seo' => [
				'page_title' => 'Compose',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'email-inbox' => [
					'css' => [
						
					],
					'js' => [
						'vendor/dropzone/dist/dropzone.js',
					],
					'seo' => [
				'page_title' => 'Inbox',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'email-read' => [
					'css' => [
						'vendor/jqueryui/css/jquery-ui.min.css'
					],
					'js' => [
						'vendor/jqueryui/js/jquery-ui.min.js'
					],
					'seo' => [
				'page_title' => 'Read',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-ckeditor' => [
					'css' => [
					],
					'js' => [
						'vendor/ckeditor/ckeditor.js'
					],
					'seo' => [
				'page_title' => 'Ckeditor',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-element' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Form Element',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-pickers' => [
					'css' => [
						'vendor/bootstrap-daterangepicker/daterangepicker.css',
						'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
						'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
						'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
						'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
						'vendor/pickadate/themes/default.css',
						'vendor/pickadate/themes/default.date.css',
						'https://fonts.googleapis.com/icon?family=Material+Icons',
					],
					'js' => [
						'vendor/moment/moment.min.js',
						'vendor/bootstrap-daterangepicker/daterangepicker.js',
						'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
						'vendor/jquery-asColor/jquery-asColor.min.js',
						'vendor/jquery-asGradient/jquery-asGradient.min.js',
						'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
						'vendor/pickadate/picker.js',
						'vendor/pickadate/picker.time.js',
						'vendor/pickadate/picker.date.js',
						'js/plugins-init/bs-daterange-picker-init.js',
						'js/plugins-init/clock-picker-init.js',
						'js/plugins-init/jquery-asColorPicker.init.js',
						'js/plugins-init/material-date-picker-init.js',
						'js/plugins-init/pickadate-init.js',
					],
					'seo' => [
				'page_title' => 'Pickers',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'content' => [
					'css' => [
						'vendor/select2/css/select2.min.css',
					],
					'js' => [
						'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Content',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-validation-jquery' => [
					'css' => [
					],
					'js' => [
						'vendor/jquery-steps/build/jquery.steps.min.js',
						'vendor/jquery-validation/jquery.validate.min.js',
						'js/plugins-init/jquery.validate-init.js',
						'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
					],
					'seo' => [
				'page_title' => 'Form Validation',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-wizard' => [
					'css' => [
						'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
					],
					'js' => [
						'vendor/jquery-steps/build/jquery.steps.min.js',
						'js/plugins-init/jquery.validate-init.js',
						'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
						
					],
					'seo' => [
				'page_title' => 'Wizard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'map-jqvmap' => [
					'css' => [
						'vendor/jqvmap/css/jqvmap.min.css'
					],
					'js' => [
						'vendor/jqvmap/js/jquery.vmap.min.js',
						'vendor/jqvmap/js/jquery.vmap.world.js',
						'vendor/jqvmap/js/jquery.vmap.usa.js',
						'js/plugins-init/jqvmap-init.js',
					],
					'seo' => [
				'page_title' => 'Jqvmap',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'page-error-400' => [
					'css' => [
						'vendor/bootstrap-select/dist/css/bootstrap-select.min.css'
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'table-bootstrap-basic' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Basic Bootstrap Table',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'table-datatable-basic' => [
					'css' => [
						'vendor/datatables/css/jquery.dataTables.min.css',
						'vendor/datatables/responsive/responsive.css',
					],
					'js' => [
						'vendor/datatables/js/jquery.dataTables.min.js',
						'vendor/datatables/responsive/responsive.js',
						'js/plugins-init/datatables.init.js',
					],
					'seo' => [
				'page_title' => 'Basic DataTable',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-lightgallery' => [
					'css' => [
						'vendor/lightgallery/dist/css/lightgallery.css',
						'vendor/lightgallery/dist/css/lg-thumbnail.css',
						'vendor/lightgallery/dist/css/lg-zoom.css',
						
					],
					'js' => [
						'vendor/lightgallery/dist/lightgallery.min.js',
						'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
						'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
					],
					'seo' => [
				'page_title' => 'Lightgallery',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-nestable' => [
					'css' => [
						'vendor/nestable2/css/jquery.nestable.min.css'
					],
					'js' => [
						'vendor/nestable2/js/jquery.nestable.min.js',
						'js/plugins-init/nestable-init.js',
					],
					'seo' => [
				'page_title' => 'Nestable',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-noui-slider' => [
					'css' => [
						'vendor/nouislider/nouislider.min.css'
					],
					'js' => [
						'vendor/nouislider/nouislider.min.js',
						'vendor/wnumb/wNumb.js',
						'js/plugins-init/nouislider-init.js',
					],
					'seo' => [
				'page_title' => 'Noui Slider',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-select2' => [
					'css' => [
						'vendor/select2/css/select2.min.css'
					],
					'js' => [
						'vendor/select2/js/select2.full.min.js',
						'js/plugins-init/select2-init.js',
					],
					'seo' => [
				'page_title' => 'Select2',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-sweetalert' => [
					'css' => [
						'vendor/sweetalert2/sweetalert2.min.css'
					],
					'js' => [
						'vendor/sweetalert2/sweetalert2.min.js',
						'js/plugins-init/sweetalert.init.js',
					],
					'seo' => [
				'page_title' => 'Sweetalert',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'uc-toastr' => [
					'css' => [
						'vendor/toastr/css/toastr.min.css'
					],
					'js' => [
						'vendor/toastr/js/toastr.min.js',
						'js/plugins-init/toastr-init.js',
					],
					'seo' => [
				'page_title' => 'Toastr',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'form-editor-summernote' => [
					'css' => [
						'vendor/summernote/summernote.css',
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Dashboard',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-accordion' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Accordion',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-alert' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Alert',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-badge' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Badge',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-button' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Button',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-button-group' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Button Group',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-card' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Card',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-carousel' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Carousel',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-dropdown' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Dropdown',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-grid' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Grid',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-list-group' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'List Group',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-media-object' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Media Object',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-modal' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Modal',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-pagination' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Pagination',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-popover' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Popover',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-progressbar' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Progressbar',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-tab' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Tab',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'ui-typography' => [
					'css' => [
					],
					'js' => [

					],
					'seo' => [
				'page_title' => 'Typography',
				'meta' => [
				    ['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
				    ['name' => 'author', 'content' => 'Dexignlabs'],
				    ['name' => 'robots', 'content' => 'index, follow'],
				    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
				    ['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
				    ['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'format-detection', 'content' => 'telephone=no'],
				    ['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
				    ['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
				    ['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
				    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
				],
			],
				],	
				'widget-basic' => [
					'css' => [
						'vendor/chartist/css/chartist.min.css',
						'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					],
					'js' => [
						'vendor/chart-js/chart.bundle.min.js',
						'vendor/apexchart/apexchart.js',
						'vendor/counter/counter.min.js',
						'vendor/counter/waypoint.min.js',
						'vendor/chartist/js/chartist.min.js',
						'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
						'vendor/flot/jquery.flot.js',
						'vendor/flot/jquery.flot.pie.js',
						'vendor/flot/jquery.flot.resize.js',
						'vendor/flot-spline/jquery.flot.spline.min.js',
						'vendor/jquery-sparkline/jquery.sparkline.min.js',
						'js/plugins-init/sparkline-init.js',
						'vendor/peity/jquery.peity.min.js',
						'js/plugins-init/piety-init.js',
						'js/plugins-init/widgets-script-init.js',
						'vendor/bootstrap-select/js/bootstrap-select.min.js',
					],
					'seo' => [
						'page_title' => 'Widget Basic',
						'meta' => [
							['name' => 'keywords', 'content' => 'Fillow, PHP SaaS Admin Dashboard, Admin Dashboard Template, Saas Dashboard Template, PHP Dashboard Template, DexignZone, PHP, SSL Encryption, Mobile Optimization, Template, e-commerce, UX/UI, mobile development, web development, Bootstrap 5, mobile app template, mobile commerce, Bootstrap Template, Admin Panel, Dashboard UI Kit, HTML5, CSS3, Responsive Web App, Bootstrap 4, User Interface Design, android, mobile, mobile template, mobile app, ui kit, dark layout, app, mobile web, pwa, web app, Bootstrap, mobile UI, app template, responsive design, modern UI, technology, User-Friendly Interface, PWA (Progressive Web App), Innovative Technology, App Development, Mobile App Development, Product Showcase, Customizable, Modern Design, UI/UX Design, Mobile App Design, Web Application, Digital Presence'],
							['name' => 'author', 'content' => 'Dexignlabs'],
							['name' => 'robots', 'content' => 'index, follow'],
							['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover'],
							['name' => 'description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience.'],
							['property' => 'og:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
							['property' => 'og:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
							['property' => 'og:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
							['name' => 'format-detection', 'content' => 'telephone=no'],
							['name' => 'twitter:description', 'content' => 'Discover Fillow, a responsive PHP SaaS admin dashboard template crafted with Bootstrap. This versatile dashboard boasts a sleek and modern design, perfect for a wide range of web applications. Empower your projects with Fillow intuitive interface and customizable features. Explore Fillow at Dexignlabs for a seamless admin dashboard experience'],
							['name' => 'twitter:title', 'content' => 'Fillow - PHP Saas Admin Dashboard Bootstrap Template | Dexignlabs'],
							['name' => 'twitter:image', 'content' => 'https://fillow.dexignlab.com/php/social-image.png'],
							['name' => 'twitter:card', 'content' => 'summary_large_image'],
						],
					],
				],	
			],
	];

	$pageTitle = !empty($DexignZoneSettings['pagelevel'][$CurrentPage]['seo']['page_title']) ? $DexignZoneSettings['pagelevel'][$CurrentPage]['seo']['page_title'] : $DexignZoneSettings['site_level']['seo']['page_title'];

	global $AdminTitle;
	global $CurrentPage; 
	global $pageTitle; 
	global $DexignZoneSettings; 
?>
