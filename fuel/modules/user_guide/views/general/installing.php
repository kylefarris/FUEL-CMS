<h1>Installing FUEL CMS</h1>
<p>The following are steps to installing FUEL:</p>
<ol>
	<li>Download the latest version from <a href="http://www.getfuelcms.com" target="_blank">getfuelcms.com</a></li>
	<li>Place the downloaded folder onto your webserver and make sure your <dfn>fuel/data_backup</dfn>, <dfn>fuel/install</dfn> and <dfn>fuel/crons</dfn> folders are in a folder inaccessible to the web <strong>(the .htaccess file has these blocked by default so you may not need to do anything)</strong>.</li>
	<li>Browse to the index page. You should see a page of similar instructions as below.</li>
	<li>Alter your Apache .htaccess file to the proper RewriteBase directory. The default is your web server's root directory. <strong>If you do not have mod_rewrite enabled you will need to change the $config['index_page'] from blank to 'index.php' in <strong>fuel/application/config.php</strong></strong></li>
	<li>Install the database by first creating the database in MySQL and then running the <dfn>fuel/install/fuel_schema.sql</dfn> file</li>
	<li>Configure the <dfn>fuel/application/config/database.php</dfn> file with the proper database connection settings (like with any other CodeIgniter database application)</li>
	<li>Make the following folders writable:
		<ul>
			<li class="<?=(is_really_writable(BASEPATH.'cache/')) ? 'success' : 'error'; ?>">
				<?=BASEPATH.'cache/'?>
			</li>
			<li class="<?=(is_really_writable(BASEPATH.'cache/dwoo/')) ? 'success' : 'error'; ?>">
				<?=BASEPATH.'cache/dwoo/'?>
			</li>
			<li class="<?=(is_really_writable(BASEPATH.'cache/dwoo/compiled')) ? 'success' : 'error'; ?>">
				<?=BASEPATH.'cache/dwoo/compiled'?>
			</li>
			<li class="<?=(is_really_writable(assets_server_path('', 'images'))) ? 'success' : 'error'; ?>">
				<?=WEB_ROOT.'assets/images'?>
			</li>
		</ul>
	</li>
</ol>

<p>That's it!</p>

<p class="important">Certain modules may require their own configuration and database SQL files to be run. Please reference their own documentation in the user guide for additional
install information.</p>