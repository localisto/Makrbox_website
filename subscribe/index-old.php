<?php include '../elements/header.php'; ?>
	
<!-- =========== -->
<!-- Thankyou   -->
<!-- =========== -->
	
<style>


input, textarea, .uneditable-input {

}


textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {

	margin-bottom: 0px;
	    padding: 4px 3px;	
}

</style>
		
		<div class="container">

		<!-- ============= -->
		<!-- Page template -->
		<!-- ============= -->

		<section class="page">

		

			<div class="wrap">
				<div class="row-fluid">

				<div class="span12">
					
					<script src="https://js.stripe.com/v1/" type="text/javascript"></script>
					<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.1031" type="text/javascript"></script>
					<script src="http://cdn.jotfor.ms/js/stripe.js?v=3.1.1031" type="text/javascript"></script>
					<script type="text/javascript">
					   JotForm.init(function(){
					      productID = {"0":"input_1_1001"};
					      JotForm.totalCounter({"input_1_1001":{"price":"29"}});
					      JotForm.setStripeSettings('pk_live_wva7hySFvFYaI7eS5E41NA8Z');
					      $('input_5').hint('ex: myname@example.com');
					   });
					</script>
					<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.1031" rel="stylesheet" type="text/css" />
					<link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/nova.css?3.1.1031" />
					<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.1031" />
					<style type="text/css">
					    .form-label{
					        width:150px !important;
					    }
					    .form-label-left{
					        width:150px !important;
					    }
					    .form-line{
					        padding-top:12px;
					        padding-bottom:12px;
					    }
					    .form-label-right{
					        width:150px !important;
					    }
					    .form-all{
					        width:680px;
					        color:#555 !important;
					        font-family:'Lucida Grande';
					        font-size:14px;
					    }
					</style>

					<form class="jotform-form" action="http://submit.jotform.us/submit/31887198003156/" method="post" name="form_31887198003156" id="31887198003156" accept-charset="utf-8">
					  <input type="hidden" name="formID" value="31887198003156" />
					  <div class="form-all">
					    <ul class="form-section">
					      <li class="form-line" id="id_1">
					        <label class="form-label-left" id="label_1" for="input_1">
					          Subscribe<span class="form-required">*</span>
					        </label>
					        <div id="cid_1" class="form-input">
					          <input type="hidden" name="simple_fpc" value="1" /><span class="form-product-item"><input class="form-radio validate[required]" type="hidden" id="input_1_1001" name="q1_subscribe[][id]" value="1001" checked="checked" />
					            <label for="input_1_1001">
					              MakrBox Subscription<span class="form-product-details">(
					                <b>
					                  $<span id="input_1_1001_price">29.00</span>
					                  USD
					                </b>
					                for each
					                <u>
					                  month
					                </u>
					                )</span>
					            </label></span>
					          <br />
					          <hr>
					          <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
					            <tr>
					              <th colspan="2" align="left">
					                Credit Card
					              </th>
					            </tr>
					            <tr>
					              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] cc_firstName" type="text" size="20" id="input_1_cc_firstName" />
					                  <label class="form-sub-label" for="input_1_cc_firstName" id="sublabel_cc_firstName"> First Name </label></span>
					              </td>
					              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] cc_lastName" type="text" size="20" id="input_1_cc_lastName" />
					                  <label class="form-sub-label" for="input_1_cc_lastName" id="sublabel_cc_lastName"> Last Name </label></span>
					              </td>
					            </tr>
					            <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox validate[required] cc_number" type="text" size="33"  />
					                -
					                <label class="form-sub-label" id="sublabel_cc_number"> Credit Card Number </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required] cc_ccv" type="text" size="6" />
					                <label class="form-sub-label" id="sublabel_cc_ccv"> Security Code </label></span>
					            </td>
					            </tr>
					            <tr>
					              <td colspan="2"><span class="form-sub-label-container"><select class="form-dropdown validate[required] cc_exp_month">
					                    <option>  </option>
					                    <option value="1"> 01 </option>
					                    <option value="2"> 02 </option>
					                    <option value="3"> 03 </option>
					                    <option value="4"> 04 </option>
					                    <option value="5"> 05 </option>
					                    <option value="6"> 06 </option>
					                    <option value="7"> 07 </option>
					                    <option value="8"> 08 </option>
					                    <option value="9"> 09 </option>
					                    <option value="10"> 10 </option>
					                    <option value="11"> 11 </option>
					                    <option value="12"> 12 </option>
					                  </select>
					                  /
					                  <label class="form-sub-label" id="sublabel_cc_exp_month"> Expiration Month </label></span><span class="form-sub-label-container"><select class="form-dropdown validate[required] cc_exp_year">
					                    <option>  </option>
					                    <option value="2013"> 2013 </option>
					                    <option value="2014"> 2014 </option>
					                    <option value="2015"> 2015 </option>
					                    <option value="2016"> 2016 </option>
					                    <option value="2017"> 2017 </option>
					                    <option value="2018"> 2018 </option>
					                    <option value="2019"> 2019 </option>
					                    <option value="2020"> 2020 </option>
					                    <option value="2021"> 2021 </option>
					                    <option value="2022"> 2022 </option>
					                  </select>
					                  <label class="form-sub-label" id="sublabel_cc_exp_year"> Expiration Year </label></span>
					              </td>
					            </tr>
					            </tr>
					          </table>
					        </div>
					      </li>
					      <li class="form-line" id="id_4">
					        <label class="form-label-left" id="label_4" for="input_4">
					          Address<span class="form-required">*</span>
					        </label>
					        <div id="cid_4" class="form-input">
					          <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
					            <tr>
					              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-line" type="text" name="q4_address4[addr_line1]" id="input_4_addr_line1" />
					                  <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1"> Street Address </label></span>
					              </td>
					            </tr>
					            <tr>
					              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox form-address-line" type="text" name="q4_address4[addr_line2]" id="input_4_addr_line2" size="46" />
					                  <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2"> Street Address Line 2 </label></span>
					              </td>
					            </tr>
					            <tr>
					              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-city" type="text" name="q4_address4[city]" id="input_4_city" size="21" />
					                  <label class="form-sub-label" for="input_4_city" id="sublabel_4_city"> City </label></span>
					              </td>
					              <td><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-state" type="text" name="q4_address4[state]" id="input_4_state" size="22" />
					                  <label class="form-sub-label" for="input_4_state" id="sublabel_4_state"> State / Province </label></span>
					              </td>
					            </tr>
					            <tr>
					              <td width="50%" function zip(){var iterator=Prototype.K,args=$A(arguments);if(Object.isFunction(args.last())) iterator=args.pop();var collections=[this].concat(args).map($A);return this.map(function(value,index){return iterator(collections.pluck(index));});}><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-postal" type="text" name="q4_address4[postal]" id="input_4_postal" size="10" />
					                  <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal"> Postal / Zip Code </label></span>
					              </td>
					              <td><span class="form-sub-label-container"><select class="form-dropdown validate[required] form-address-country" name="q4_address4[country]" id="input_4_country">
					          
					                    <option value="United States" selected> United States </option>
					                  </select>
					                  <label class="form-sub-label" for="input_4_country" id="sublabel_4_country"> Country </label></span>
					              </td>
					            </tr>
					          </table>
					        </div>
					      </li>
					      <li class="form-line" id="id_5">
					        <label class="form-label-left" id="label_5" for="input_5">
					          E-mail<span class="form-required">*</span>
					        </label>
					        <div id="cid_5" class="form-input">
					          <input type="email" class=" form-textbox validate[required, Email]" id="input_5" name="q5_email5" size="30" />
					        </div>
					      </li>
					      <li class="form-line" id="id_6">
					        <label class="form-label-left" id="label_6" for="input_6"> Phone Number </label>
					        <div id="cid_6" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="q6_phoneNumber6[area]" id="input_6_area" size="3">
					            -
					            <label class="form-sub-label" for="input_6_area" id="sublabel_area"> Area Code </label></span><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="q6_phoneNumber6[phone]" id="input_6_phone" size="8">
					            <label class="form-sub-label" for="input_6_phone" id="sublabel_phone"> Phone Number </label></span>
					        </div>
					      </li>
					      <li class="form-line" id="id_7">
					        <label class="form-label-left" id="label_7" for="input_7"> Notes </label>
					        <div id="cid_7" class="form-input">
					          <textarea id="input_7" class="form-textarea" name="q7_notes" cols="40" rows="6"></textarea>
					        </div>
					      </li>
					      <li class="form-line" id="id_2">
					        <div id="cid_2" class="form-input-wide">
					          <div style="margin-left:156px" class="form-buttons-wrapper">
					            <button id="input_2" type="submit" class="form-submit-button">
					              Submit
					            </button>
					          </div>
					        </div>
					      </li>
					      <li style="display:none">
					        Should be Empty:
					        <input type="text" name="website" value="" />
					      </li>
					    </ul>
					  </div>
					  <input type="hidden" id="simple_spc" name="simple_spc" value="31887198003156" />
					  <script type="text/javascript">
					  document.getElementById("si" + "mple" + "_spc").value = "31887198003156-31887198003156";
					  </script>
					</form>




				</div>
			</div>
			</div>

		</section>
		</div>


		<?php include '../elements/footer.php'; ?>

