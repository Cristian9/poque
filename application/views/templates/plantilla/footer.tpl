	<footer class="main-footer">

		{*<div class="pull-right hidden-xs">

			<b>Version</b> 2.4.0

		</div>*}

		<strong>Copyright © 2017 <a href="#">Yataco.com.pe</a>.</strong> Todos los derechos reservados.

	</footer>

	{* Control Sidebar *}

	<aside class="control-sidebar control-sidebar-dark">

		

		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">

			<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

			<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

		</ul>

		{* Tab panes *}

		<div class="tab-content">

		

		<div class="tab-pane" id="control-sidebar-home-tab">

			<h3 class="control-sidebar-heading">Recent Activity</h3>

			<ul class="control-sidebar-menu">

				<li>

					<a href="javascript:void(0)">

						<i class="menu-icon fa fa-birthday-cake bg-red"></i>



						<div class="menu-info">

							<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>



							<p>Will be 23 on April 24th</p>

						</div>

					</a>

				</li>

				<li>

					<a href="javascript:void(0)">

						<i class="menu-icon fa fa-user bg-yellow"></i>



						<div class="menu-info">

							<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>



							<p>New phone +1(800)555-1234</p>

						</div>

					</a>

				</li>

				<li>

					<a href="javascript:void(0)">

						<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>



						<div class="menu-info">

							<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>



							<p>nora@example.com</p>

						</div>

					</a>

				</li>

				<li>

					<a href="javascript:void(0)">

						<i class="menu-icon fa fa-file-code-o bg-green"></i>



						<div class="menu-info">

							<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>



							<p>Execution time 5 seconds</p>

						</div>

					</a>

				</li>

			</ul>



			<h3 class="control-sidebar-heading">Tasks Progress</h3>

				<ul class="control-sidebar-menu">

					<li>

					<a href="javascript:void(0)">

					<h4 class="control-sidebar-subheading">

					Custom Template Design

					<span class="label label-danger pull-right">70%</span>

					</h4>



					<div class="progress progress-xxs">

					<div class="progress-bar progress-bar-danger" style="width: 70%"></div>

					</div>

					</a>

					</li>



					<li>

					<a href="javascript:void(0)">

					<h4 class="control-sidebar-subheading">

					Update Resume

					<span class="label label-success pull-right">95%</span>

					</h4>



					<div class="progress progress-xxs">

					<div class="progress-bar progress-bar-success" style="width: 95%"></div>

					</div>

					</a>

					</li>



					<li>

					<a href="javascript:void(0)">

					<h4 class="control-sidebar-subheading">

					Laravel Integration

					<span class="label label-warning pull-right">50%</span>

					</h4>



					<div class="progress progress-xxs">

					<div class="progress-bar progress-bar-warning" style="width: 50%"></div>

					</div>

					</a>

					</li>



					<li>

					<a href="javascript:void(0)">

					<h4 class="control-sidebar-subheading">

					Back End Framework

					<span class="label label-primary pull-right">68%</span>

					</h4>



					<div class="progress progress-xxs">

					<div class="progress-bar progress-bar-primary" style="width: 68%"></div>

					</div>

					</a>

					</li>

				</ul>

			</div>



			<div class="tab-pane" id="control-sidebar-settings-tab">

				<form method="post">

					<h3 class="control-sidebar-heading">General Settings</h3>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Report panel usage

						<input type="checkbox" class="pull-right" checked>

						</label>



						<p>

						Some information about this general settings option

						</p>

					</div>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Allow mail redirect

						<input type="checkbox" class="pull-right" checked>

						</label>



						<p>

						Other sets of options are available

						</p>

					</div>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Expose author name in posts

						<input type="checkbox" class="pull-right" checked>

						</label>



						<p>

						Allow the user to show his name in blog posts

						</p>

					</div>



					<h3 class="control-sidebar-heading">Chat Settings</h3>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Show me as online

						<input type="checkbox" class="pull-right" checked>

						</label>

					</div>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Turn off notifications

						<input type="checkbox" class="pull-right">

						</label>

					</div>



					<div class="form-group">

						<label class="control-sidebar-subheading">

						Delete chat history

						<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>

						</label>

					</div>

					

				</form>

			</div>



		</div>

	</aside>

	{* Control Sidebar *}

	<div class="control-sidebar-bg"></div>

</div>

{strip}

{* JQUERY *}
<script src="{$base_url}public/plugins/jquery/jquery.min.js" type="text/javascript"></script>
{* JQUERY UI *}
<script src="{$base_url}public/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
{* BOOTSTRAP *}
<script src="{$base_url}public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
{* DATATABLES*}
<script src="{$base_url}public/manager/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{$base_url}public/manager/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
{* COLOR PICKER *}
<script src="{$base_url}public/manager/plugins/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"></script>
{* FastClick *}
<script src="{$base_url}public/manager/plugins/fastclick/lib/fastclick.js"></script>
{* AdminLTE App *}
<script src="{$base_url}public/manager/js/adminlte.min.js"></script>
{* Sparkline *}
<script src="{$base_url}public/manager/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
{* iCheck *}
<script src="{$base_url}public/manager/plugins/iCheck/icheck.min.js"></script>
{* SlimScroll *}
<script src="{$base_url}public/manager/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
{* ChartJS *}
<script src="{$base_url}public/manager/plugins/chart.js/Chart.js"></script>
{* TEXT EDITOR *}
<script src="{$base_url}public/manager/plugins/tinymce/tinymce.min.js"></script>
{* AdminLTE dashboard demo (This is only for demo purposes) *}
{*<script src="{$base_url}public/manager/js/pages/dashboard2.js"></script>*}
{* AdminLTE for demo purposes *}
<script src="{$base_url}public/manager/js/demo.js"></script>
{*Alertify*}
<script src="{$base_url}public/plugins/alertify/alertify.js"></script>
{*Numeric*}
<script src="{$base_url}public/js/numeric.js"></script>
{*Angular*}
<script src="{$base_url}public/js/angular.js"></script>
{* Manager Js Personalizado *}
<script src="{$base_url}public/manager/js/manager.js"></script>
<script src="{$base_url}public/manager/js/script.js"></script>
<script src="{$base_url}public/js/process.js"></script>
<script src="{$base_url}public/js/script.js"></script>
</body>
</html>
{/strip}