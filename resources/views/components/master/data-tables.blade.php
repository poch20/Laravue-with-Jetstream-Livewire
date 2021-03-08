<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>DataTables example - Bootstrap 3</title>

  @stack('dataTableStyles')
  @stack('dataTableScripts')

</head>
<body class="wide comments example dt-example-bootstrap">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-header">
      @include('layouts\livuewire\pages\DataTables\1-DTCHeader')
		</div>
		<div class="fw-nav">
      @include('layouts\livuewire\pages\DataTables\2-DTCNav')
		</div>
		<div class="fw-body">
			<div class="content">
        @include('layouts\livuewire\pages\DataTables\3-InfoClass')
        @include('layouts\livuewire\pages\DataTables\4-Table')
        @include('layouts\livuewire\pages\DataTables\5-tabs')


				<h2>Other examples</h2>
				<div class="toc">
					<div class="toc-group">
						<h3><a href="../basic_init/index.html">Basic initialisation</a></h3>
						<ul class="toc">
							<li>
								<a href="../basic_init/zero_configuration.html">Zero configuration</a>
							</li>
							<li>
								<a href="../basic_init/filter_only.html">Feature enable / disable</a>
							</li>
							<li>
								<a href="../basic_init/table_sorting.html">Default ordering (sorting)</a>
							</li>
							<li>
								<a href="../basic_init/multi_col_sort.html">Multi-column ordering</a>
							</li>
							<li>
								<a href="../basic_init/multiple_tables.html">Multiple tables</a>
							</li>
							<li>
								<a href="../basic_init/hidden_columns.html">Hidden columns</a>
							</li>
							<li>
								<a href="../basic_init/complex_header.html">Complex headers (rowspan and colspan)</a>
							</li>
							<li>
								<a href="../basic_init/dom.html">DOM positioning</a>
							</li>
							<li>
								<a href="../basic_init/flexible_width.html">Flexible table width</a>
							</li>
							<li>
								<a href="../basic_init/state_save.html">State saving</a>
							</li>
							<li>
								<a href="../basic_init/alt_pagination.html">Alternative pagination</a>
							</li>
							<li>
								<a href="../basic_init/data_rendering.html">Data rendering</a>
							</li>
							<li>
								<a href="../basic_init/scroll_y.html">Scroll - vertical</a>
							</li>
							<li>
								<a href="../basic_init/scroll_y_dynamic.html">Scroll - vertical, dynamic height</a>
							</li>
							<li>
								<a href="../basic_init/scroll_x.html">Scroll - horizontal</a>
							</li>
							<li>
								<a href="../basic_init/scroll_xy.html">Scroll - horizontal and vertical</a>
							</li>
							<li>
								<a href="../basic_init/comma-decimal.html">Language - Comma decimal place</a>
							</li>
							<li>
								<a href="../basic_init/language.html">Language options</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../advanced_init/index.html">Advanced initialisation</a></h3>
						<ul class="toc">
							<li>
								<a href="../advanced_init/events_live.html">DOM / jQuery events</a>
							</li>
							<li>
								<a href="../advanced_init/dt_events.html">DataTables events</a>
							</li>
							<li>
								<a href="../advanced_init/column_render.html">Column rendering</a>
							</li>
							<li>
								<a href="../advanced_init/length_menu.html">Page length options</a>
							</li>
							<li>
								<a href="../advanced_init/dom_multiple_elements.html">Multiple table control elements</a>
							</li>
							<li>
								<a href="../advanced_init/complex_header.html">Complex headers with column visibility</a>
							</li>
							<li>
								<a href="../advanced_init/object_dom_read.html">Read HTML to data objects</a>
							</li>
							<li>
								<a href="../advanced_init/html5-data-options.html">HTML5 data-* attributes - table options</a>
							</li>
							<li>
								<a href="../advanced_init/html5-data-attributes.html">HTML5 data-* attributes - cell data</a>
							</li>
							<li>
								<a href="../advanced_init/language_file.html">Language file</a>
							</li>
							<li>
								<a href="../advanced_init/defaults.html">Setting defaults</a>
							</li>
							<li>
								<a href="../advanced_init/row_callback.html">Row created callback</a>
							</li>
							<li>
								<a href="../advanced_init/row_grouping.html">Row grouping</a>
							</li>
							<li>
								<a href="../advanced_init/footer_callback.html">Footer callback</a>
							</li>
							<li>
								<a href="../advanced_init/dom_toolbar.html">Custom toolbar elements</a>
							</li>
							<li>
								<a href="../advanced_init/sort_direction_control.html">Order direction sequence control</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="./index.html">Styling</a></h3>
						<ul class="toc active">
							<li>
								<a href="./display.html">Base style</a>
							</li>
							<li>
								<a href="./no-classes.html">Base style - no styling classes</a>
							</li>
							<li>
								<a href="./cell-border.html">Base style - cell borders</a>
							</li>
							<li>
								<a href="./compact.html">Base style - compact</a>
							</li>
							<li>
								<a href="./hover.html">Base style - hover</a>
							</li>
							<li>
								<a href="./order-column.html">Base style - order-column</a>
							</li>
							<li>
								<a href="./row-border.html">Base style - row borders</a>
							</li>
							<li>
								<a href="./stripe.html">Base style - stripe</a>
							</li>
							<li class="active">
								<a href="./bootstrap.html">Bootstrap 3</a>
							</li>
							<li>
								<a href="./bootstrap4.html">Bootstrap 4</a>
							</li>
							<li>
								<a href="./bootstrap5.html">Bootstrap 5</a>
							</li>
							<li>
								<a href="./foundation.html">Foundation</a>
							</li>
							<li>
								<a href="./semanticui.html">Semantic UI</a>
							</li>
							<li>
								<a href="./jqueryUI.html">jQuery UI ThemeRoller</a>
							</li>
							<li>
								<a href="./material.html">Material Design (Tech. preview)</a>
							</li>
							<li>
								<a href="./uikit.html">UIKit 3 (Tech. preview)</a>
							</li>
							<li>
								<a href="./bulma.html">Bulma (Tech. preview)</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../data_sources/index.html">Data sources</a></h3>
						<ul class="toc">
							<li>
								<a href="../data_sources/dom.html">HTML (DOM) sourced data</a>
							</li>
							<li>
								<a href="../data_sources/ajax.html">Ajax sourced data</a>
							</li>
							<li>
								<a href="../data_sources/js_array.html">Javascript sourced data</a>
							</li>
							<li>
								<a href="../data_sources/server_side.html">Server-side processing</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../api/index.html">API</a></h3>
						<ul class="toc">
							<li>
								<a href="../api/add_row.html">Add rows</a>
							</li>
							<li>
								<a href="../api/multi_filter.html">Individual column searching (text inputs)</a>
							</li>
							<li>
								<a href="../api/multi_filter_select.html">Individual column searching (select inputs)</a>
							</li>
							<li>
								<a href="../api/highlight.html">Highlighting rows and columns</a>
							</li>
							<li>
								<a href="../api/row_details.html">Child rows (show extra / detailed information)</a>
							</li>
							<li>
								<a href="../api/select_row.html">Row selection (multiple rows)</a>
							</li>
							<li>
								<a href="../api/select_single_row.html">Row selection and deletion (single row)</a>
							</li>
							<li>
								<a href="../api/form.html">Form inputs</a>
							</li>
							<li>
								<a href="../api/counter_columns.html">Index column</a>
							</li>
							<li>
								<a href="../api/show_hide.html">Show / hide columns dynamically</a>
							</li>
							<li>
								<a href="../api/api_in_init.html">Using API in callbacks</a>
							</li>
							<li>
								<a href="../api/tabs_and_scrolling.html">Scrolling and Bootstrap tabs</a>
							</li>
							<li>
								<a href="../api/regex.html">Search API (regular expressions)</a>
							</li>
							<li>
								<a href="../api/highcharts.html">HighCharts Integration</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../ajax/index.html">Ajax</a></h3>
						<ul class="toc">
							<li>
								<a href="../ajax/simple.html">Ajax data source (arrays)</a>
							</li>
							<li>
								<a href="../ajax/objects.html">Ajax data source (objects)</a>
							</li>
							<li>
								<a href="../ajax/deep.html">Nested object data (objects)</a>
							</li>
							<li>
								<a href="../ajax/objects_subarrays.html">Nested object data (arrays)</a>
							</li>
							<li>
								<a href="../ajax/orthogonal-data.html">Orthogonal data</a>
							</li>
							<li>
								<a href="../ajax/null_data_source.html">Generated content for a column</a>
							</li>
							<li>
								<a href="../ajax/custom_data_property.html">Custom data source property</a>
							</li>
							<li>
								<a href="../ajax/custom_data_flat.html">Flat array data source</a>
							</li>
							<li>
								<a href="../ajax/defer_render.html">Deferred rendering for speed</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../server_side/index.html">Server-side</a></h3>
						<ul class="toc">
							<li>
								<a href="../server_side/simple.html">Server-side processing</a>
							</li>
							<li>
								<a href="../server_side/custom_vars.html">Custom HTTP variables</a>
							</li>
							<li>
								<a href="../server_side/post.html">POST data</a>
							</li>
							<li>
								<a href="../server_side/ids.html">Automatic addition of row ID attributes</a>
							</li>
							<li>
								<a href="../server_side/object_data.html">Object data source</a>
							</li>
							<li>
								<a href="../server_side/row_details.html">Row details</a>
							</li>
							<li>
								<a href="../server_side/select_rows.html">Row selection</a>
							</li>
							<li>
								<a href="../server_side/jsonp.html">JSONP data source for remote domains</a>
							</li>
							<li>
								<a href="../server_side/defer_loading.html">Deferred loading of data</a>
							</li>
							<li>
								<a href="../server_side/pipeline.html">Pipelining data to reduce Ajax calls for paging</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../plug-ins/index.html">Plug-ins</a></h3>
						<ul class="toc">
							<li>
								<a href="../plug-ins/api.html">API plug-in methods</a>
							</li>
							<li>
								<a href="../plug-ins/sorting_auto.html">Ordering plug-ins (with type detection)</a>
							</li>
							<li>
								<a href="../plug-ins/sorting_manual.html">Ordering plug-ins (no type detection)</a>
							</li>
							<li>
								<a href="../plug-ins/range_filtering.html">Custom filtering - range search</a>
							</li>
							<li>
								<a href="../plug-ins/dom_sort.html">Live DOM ordering</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fw-footer">
		<div class="skew"></div>
		<div class="skew-bg"></div>
		<div class="copyright">
			<h4>DataTables</h4>
			<p>DataTables designed and created by <a href="//sprymedia.co.uk">SpryMedia Ltd</a>.<br>
			© 2007-2021 <a href="/license/mit">MIT licensed</a>. <a href="/privacy">Privacy policy</a>. <a href="/supporters">Supporters</a>.<br>
			SpryMedia Ltd is registered in Scotland, company no. SC456502.</p>
		</div>
	</div>
	<script type="text/javascript">
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-365466-5']);
				  _gaq.push(['_trackPageview']);

				  (function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();
	</script>
</body>
</html>
