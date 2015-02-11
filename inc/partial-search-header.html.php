<?php 
require_once("config.php");

/* This file contains instructions for three different states of the form:
 *   - Displaying the initial search form
 *   - Handling a form submission and ...
 *       - ... displaying the results if matches are found.
 *       - ... displaying a "no results found" message if necessary.
 */

// if a non-blank search term is specified in
// the query string, perform a search
$search_term = "";
if (isset($_GET["s"])) {
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		require_once(ROOT_PATH . "inc/products.php");
		$products = get_products_search($search_term);
	}
} ?>
		<div>
			<form style="margin-bottom: 2px; margin-top: 2px; width: 150px; }" method="get" action="<?php echo BASE_URL . "search/"; ?>">
				<?php // pre-populate the current search term in the search box; ?>
				<?php // if a search hasn't been performed, then that search term ?>
				<?php // will be blank and the box will look empty ?>
				<input type="text" name="s" placeholder="SEARCH" value="<?php echo htmlspecialchars($search_term); ?>">
			</form>
		</div>