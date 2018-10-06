<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>

</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Sales Data of Electronic Division</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>NEV</th>
				<th>TIPUS</th>
				<th>ALLAPOT</th>
			</tr>
		</thead>
		<tbody>
		<?php

		require 'partnerek_select.php';

		while ($array[] = $query->fetch_object());
		array_pop($array);

		foreach($array as $option)

		{

			echo '<tr>

					<td>'.$option->PARTNER_ID.'</td>
					<td>'.$option->PARTNER_NEV.'</td>
					<td>'.$option->PARTNER_TIPUSA.'</td>
					<td>'.$option->PARTNER_ALLAPOTA.'</td>

				</tr>';


		}


		?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
</body>
</html>