<?php
/**
*  Team: RollRollTeam
*  Coding by 许健 2013018， 吕昆娴2013851， 运开2012619
*  后台的布局layout
*/
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>RollRollTeam - Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

</head>
<body>
<?php $this->beginBody() ?>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="index.php" class="logo">
					<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<form action="../web/index.php?r=site%2Flogout" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout"> logout</button>
										</form>
										<!-- <a class="dropdown-item" href="">Logout</a> -->
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">		
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#db_">
								<i class="fas fa-th-list"></i>
								<p><b>数据库操作</b></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="db_">
								<ul class="nav nav-collapse">
								<li>
										<form action="../web/index.php?r=team" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">团队信息 </button>
										</form>
									</li>
								<li>
										<form action="../web/index.php?r=military-comparison" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">军事对比 </button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=news" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">新闻索引 </button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=news" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">重要事件 </button>
										</form>
									</li>
								</ul>
							</div>
						</li>


						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p><b>团队作业</b></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
									<form action="../web/index.php?r=site%2Fdemand" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout"> 
											<a href="../../data/team/RollRollTeam_需求文档(2013018_2012619_2013851).pdf" download="RollRollTeam_需求文档(2013018_2012619_2013851).pdf">需求文档</a>
											</button>
										</form>
										<form action="../web/index.php?r=site%2Fdemand" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
											<a href="../../data/team/RollRollTeam_设计文档(2013018_2012619_2013851).pdf" download="RollRollTeam_设计文档(2013018_2012619_2013851).pdf">设计文档</a>
											</button>
										</form>
										<form action="../web/index.php?r=site%2Fform" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
											<a href="../../data/team/RollRollTeam_实现文档(2013018_2012619_2013851).pdf" download="RollRollTeam_实现文档(2013018_2012619_2013851).pdf">实现文档</a>
											</button>
										</form>

										<form action="../web/index.php?r=site%2Fdemand" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
											<a href="../../data/team/RollRollTeam_用户手册(2013018_2012619_2013851).pdf" download="RollRollTeam_用户手册(2013018_2012619_2013851).pdf">用户手册</a>
											</button>
										</form>
										<form action="../web/index.php?r=site%2Fform" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
											<a href="../../data/team/RollRollTeam_部署文档(2013018_2012619_2013851).pdf" download="RollRollTeam_部署文档(2013018_2012619_2013851).pdf">部署文档</a>
											</button>
										</form>

										<form action="../web/index.php?r=site%2Fdemand" method="post">
										<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
											<a href="../../data/team/RollRollTeam_项目展示ppt(2013018_2012619_2013851).pdf" download="RollRollTeam_项目展示ppt(2013018_2012619_2013851).pdf">项目展示</a>
											</button>
										</form>
										<!-- <a href="/tb-demand-goods/index.php">
											<span class="sub-item">提交需求表单</span>
										</a> -->
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p><b>个人作业-许健</b></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<form action="../web/index.php?r=site%2Fdemand" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013018_许健)/作业1(2013018_许健).zip" download="作业1(2013018_许健).zip">Web前端初探</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fweal" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013018_许健)/作业2(2013018_许健).pdf" download="作业2(2013018_许健).pdf">Web前端设计</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fshow" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013018_许健)/作业3(2013018_许健).pdf" download="作业3(2013018_许健).pdf">开源建站工具初试文档</a>
											</button>
										</form>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#bulletinboard">
								<i class="fas fa-desktop"></i>
								<p><b>个人作业-吕昆娴</b></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="bulletinboard">
								<ul class="nav nav-collapse">
								<li>
										<form action="../web/index.php?r=site%2Fdemand" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013851_吕昆娴)/作业1(2013851_吕昆娴).pdf" download="作业1(2013851_吕昆娴).pdf">Web前端初探</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fweal" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013851_吕昆娴)/作业2(2013851_吕昆娴).pdf" download="作业2(2013851_吕昆娴).pdf">Web前端设计</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fshow" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2013851_吕昆娴)/作业3(2013851_吕昆娴).pdf" download="作业3(2013851_吕昆娴).pdf">开源建站工具初试文档</a>
											</button>
										</form>
									</li>
								</ul>
							</div>
						</li>
						<!--到此为止-->

						<li class="nav-item">
							<a data-toggle="collapse" href="#orders">
								<i class="fas fa-th-list"></i>
								<p><b>个人作业-运开</b></p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="orders">
								<ul class="nav nav-collapse">
								<li>
										<form action="../web/index.php?r=site%2Fdemand" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2012619_运开)/作业1(2012619_运开).zip" download="作业1(2012619_运开).zip">Web前端初探</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fweal" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2012619_运开)/作业2(2012619_运开).zip" download="作业2(2012619_运开).zip">Web前端设计</a>
											</button>
										</form>
									</li>
									<li>
										<form action="../web/index.php?r=site%2Fshow" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout">
												<a href="../../data/personal/个人作业(2012619_运开)/作业3(2012619_运开).docx" download="作业3(2012619_运开).docx">开源建站工具初试文档</a>
											</button>
										</form>
									</li>
								</ul>
							</div>
						</li>

						



					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				
				<?= $content ?>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
					</div>				
				</div>
			</footer>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<!-- <script src="../assets/js/atlantis.js"></script> -->
	<script>
		$.noConflict();
		jQuery(document).ready(function() {
			jQuery('#basic-datatables').DataTable({
			});

			// Add Row
			jQuery('#add-row').DataTable({
				"pageLength": 5,
			});
		});
	</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
