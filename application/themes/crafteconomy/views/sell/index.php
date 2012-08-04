<div class="row">
  <div class="span12">
  	<header class="page-header">
  		<h1>List item for sale</h1>
  	</header>
  </div>
</div>

<section class="row">
	<div class="span12">
	<form class="form-horizontal" name="email-signin">
      <fieldset>
          <div class="control-group">
            <label class="control-label" for="email">Title</label>
            <div class="controls">
              <input type="text" class="input-xlarge required email" id="email">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="">Description</label>
            <div class="controls">
              <textarea class="input-xlarge" id="description" rows="3"></textarea>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="email">Price</label>
            <div class="controls">
              <input type="text" class="span2 input-xlarge required email" id="email">
            </div>
          </div>

          <hr>
          <div class="control-group">
            <label class="control-label" for="password"></label>
            <div class="controls">
            	<label class="checkbox">
            		<input type="checkbox" id="confirm_listing_sms" name="confirm_listing_sms" value="yes">
            		Are you a reseller?
          		</label>
            </div>
          </div>
          <div id="confirmphone" class="hide control-group">
            <label class="control-label" for="password">Maker's Phone Number</label>
            <div class="controls">
              <input type="text" class="input-xlarge required" id="phone">
            </div>
          </div>
          
        	<div class="form-actions">
        		<button type="submit" class="btn btn-large btn-primary">Create Listing</button>
        		<button class="btn btn-large">Cancel</button>

      		</div>
      </form>
  </div>
</section>