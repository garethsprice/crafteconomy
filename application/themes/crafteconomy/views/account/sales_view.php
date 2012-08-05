<div class="row">
<div class="span12">
	<header class="page-header">
		<h1>
			Sales
		</h1>
	</header>
</div>
</div>

<div class="row">
  <div class="span3">    
    <div class="well sidebar-nav">
      <?php print $account_nav; ?>
    </div>
  
    <div class="well">
      <h3 class="nav-header">Account Balance</h3>
      <h1 style="margin: .25em 0;">$<?php print $balance;?></h1>
      <p><a href="#" class="btn btn-xlarge btn-primary">Cash out with <img src="<?php print site_url('assets/themes/crafteconomy/img/paypal.png'); ?>" alt="Paypal" /></a></p>
    </div>
  </div>
  <div class="span9">
    <table class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th>ID</th>
          <th>Product ID</th>
          <th>Date Purchased</th>
          <th>Date Completed</th>
          <th>Buyer ID</th>
          <th>Order Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($orders as $order): ?>
        <tr>
          <td><?php print $order['id']; ?></td>
          <td><?php print $order['product_id']; ?></td>
          <td><?php print $order['date_purchased']; ?></td>
          <td><?php print $order['date_completed']; ?></td>
          <td><?php print $order['buyer_id']; ?></td>
          <td><?php print $order['order_status']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="row">
 
</div>