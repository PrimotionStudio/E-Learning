<div class="sidebar" style="background-color: #030749 !important;" data-color="white" data-active-color="danger">
	<div class="logo">
		<a href="javascript:;" class="">
			<div class="logo-image-small">
				<img src="assets/img/rsu-logo.png" class="mt-3">
			</div>
			<!-- <p>CT</p> -->
		</a>
		<a href="javascript:;" class="simple-text logo-normal">
			<!-- E-Learning System -->
			<!-- <div class="logo-image-big">
			<img src="assets/img/logo-big.png">
		  </div> -->
		</a>
	</div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<?php
			if ($get_user["role"] !== null) :
			?>
				<li class="<?php
							$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
							$file_name = end($file_path);
							$route = explode(".", $file_name)[0];
							if ($route === 'home') {
								echo 'active';
							}
							?>">
					<a href="home">
						<i class="nc-icon nc-bank"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<?php
				if ($get_user["role"] === 'student') :
				?>
					<!-- Coming Soon -->
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'student-courses') {
									echo 'active';
								}
								?>">
						<a href="student-courses">
							<i class="nc-icon nc-single-copy-04"></i>
							<p>Courses</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<?php
				if ($get_user["role"] === 'lecturer') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'students-list') {
									echo 'active';
								}
								?>">
						<a href="students-list">
							<i class="nc-icon nc-single-02"></i>
							<p>Students</p>
						</a>
					</li>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'lesson') {
									echo 'active';
								}
								?>">
						<a href="lesson">
							<i class="nc-icon nc-paper"></i>
							<p>Lesson</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<?php
				if ($get_user["role"] === 'admin') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'users') {
									echo 'active';
								}
								?>">
						<a href="users">
							<i class="nc-icon nc-single-02"></i>
							<p>Users</p>
						</a>
					</li>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'division') {
									echo 'active';
								}
								?>">
						<a href="division">
							<i class="nc-icon nc-badge"></i>
							<p>Division</p>
						</a>
					</li>
				<?php
				endif;
				?>
			<?php
			endif;
			?>
			<li class="active-pro">
				<a href="logout">
					<i class="nc-icon text-danger nc-button-power"></i>
					<p class="text-danger">Logout</p>
				</a>
			</li>
		</ul>
	</div>
</div>