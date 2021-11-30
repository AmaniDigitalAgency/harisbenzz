		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content"> 
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p> <?php echo $_SESSION['user_name']; ?></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="./">
											<span class="sub-item">HOME</span>
										</a>
									</li>
									<li>
										<a href="../">
											<span class="sub-item"> Visit Your Site</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-home"></i>
								<p> Listings  </p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=listings">
											<span class="sub-item"> New Listing </span>
										</a>
									</li>
									<li>
										<a href="?page=listings">
											<span class="sub-item"> All Listings </span>
										</a>
									</li> 
								</ul>
							</div>
						</li> 
						
						 
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-power-off"></i> </span> Log Out </a> 
						</li>
					</ul>
				</div>
			</div>
		</div>