<?php echo $header; 
// Openshift code
$op_host=getenv("OPENSHIFT_MYSQL_DB_HOST");
$op_port=getenv("OPENSHIFT_MYSQL_DB_PORT");
$op_uname=getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$op_pass=getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$op_dbname=getenv("OPENSHIFT_APP_NAME");


?>

<section class="content">
	<article>
		<h1>Your database details</h1>

		<p>This page is preconfigured to suite your openshift catridge.</p>
	</article>

	<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="host">Database Host</label>
				<input id="host" name="host" value="<?php echo $op_host; ?>" readonly>

				<i>Filled from openshift.</i>
			</p>

			<p>
				<label for="port">Port</label>
				<input id="port" name="port" value="<?php echo $op_port; ?>" readonly>

				<i>Filled from openshift.</i>
			</p>

			<p>
				<label for="user">Username</label>
				<input id="user" name="user" value="<?php echo $op_uname; ?>" readonly>

				<i>Filled from openshift.</i>
			</p>

			<p>
				<label for="pass">Password</label>
				<input id="pass" name="pass" value="<?php echo $op_pass; ?>" readonly>

				<i>Filled from openshift.</i>
			</p>

			<p>
				<label for="name">Database Name</label>
				<input id="name" name="name" value="<?php echo $op_dbname; ?>" readonly>

				<i>Filled from openshift.</i>
			</p>

			<p>
				<label for="prefix">Table Prefix</label>
				<input id="prefix" name="prefix" value="<?php echo Input::previous('prefix', 'anchor_'); ?>">

				<i>Database table name prefix.</i>
			</p>

			<p>
				<label for="collation">Collation</label>
				<select id="collation" name="collation">
					<?php foreach($collations as $code => $collation): ?>
					<?php $selected = ($code == Input::previous('collation', 'utf8_general_ci')) ? ' selected' : ''; ?>
					<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
						<?php echo $code; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<i>Change if <b>utf8_general_ci</b> doesn’t work.</i>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('start'); ?>" class="btn quiet">&laquo; Back</a>
			<button type="submit" class="btn">Next Step &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>