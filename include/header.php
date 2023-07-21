<body>
	<!--wrapper start-->
	<div class="wrapper home-default-wrapper">
		<!--== Start Header Wrapper ==-->
		<header class="header-wrapper">
			<div class="header-area header-default header-transparent sticky-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4 col-sm-6 col-lg-2">
							<div class="header-logo-area">
								<a href="/">
									<img class="logo-main" src="/assets/img/logo.png" alt="Logo" style="max-height: 5rem;" />
									<img class="logo-light" src="/assets/img/logo-light.webp.png" alt="Logo" style="max-height: 5rem;" />
								</a>
							</div>
						</div>
						<div class="col-lg-8 d-none d-lg-block">
							<div class="header-navigation-area">
								<ul class="main-menu nav position-relative" style="justify-content: flex-end;">
									<li><a href="/">Inicio</a></li>
									<li><a href="nosotros.php">Nosotros</a></li>
									<li class="nav-item dropdown">
										<a href="productos.php" 
										class="nav-link dropdown-toggle" 
										role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Productos
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<?php 
												include("navProductos.php")
											?>
										</ul>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" 
										href="servicios.php"
										role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Servicios
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<?php 
												include("navServicios.php")
											?>
										</ul>
									</li>
										<li><a href="contacto.php">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="col-8 col-sm-6 col-lg-2">
							<div class="header-action-area">
								<!-- <div class="header-lang-dropdown">
									<button type="button" class="btn-lang dropdown-toggle" id="dropdownLang" data-bs-toggle="dropdown" aria-expanded="false">
										EN
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownLang">
										<li class="dropdown-item active">EN</li>
										<li class="dropdown-item">BN</li>
										<li class="dropdown-item">FR</li>
									</ul>
								</div> -->
								<div class="header-action-btn">
									<a class="btn-theme" href="cotizar.php"><span>Cotizar</span></a>
								</div>
								<button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
									<span class="icon-line"></span>
									<span class="icon-line"></span>
									<span class="icon-line"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--== End Header Wrapper ==-->