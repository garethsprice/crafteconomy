<div class="row">
<div class="span12">
	<header class="page-header">
		<h1>
			Orders
		</h1>
	</header>
</div>
</div>

<div class="row">
  <div class="span3">    
    <div class="well sidebar-nav">
      <?php print $account_nav; ?>
    </div>
  </div>
  <div class="span9">
    <table class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Product</th>
          <th>Date Purchased</th>
          <th>Order Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($orders as $order): ?>
        <tr>
          <td><?php print $order['id']; ?></td>
          <td><?php print $order['title']; ?></td>
          <td><?php print $order['date_purchased']; ?></td>
          <td><?php print $order['order_status']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>