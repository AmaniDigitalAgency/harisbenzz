									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Listings
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												
												 <form class="form-horizontal" method="POST" action="includes/new-listing.inc.php" enctype="multipart/form-data"> 
												<div class="modal-body"> 
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="Listing Name"> Listing Title </label>
																	<input type="text" class="form-control" name = "listing_title" placeholder="Listing Title"> 
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="Location"> Listing Location </label>
																	<input type="text" class="form-control" name = "listing_location" placeholder="Listing Location"> 
																</div>  
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleFormControlSelect1"> Listing Type *</label>
																	<select class="form-control" name = "listing_type" required>
																		<option> For Sale </option>
																		<option>For Rent </option>
																		<option> Both Sale And Rent </option>
																	</select>
																</div>  
															</div>  
															<div class="col-md-6">
																<div class="form-group">
																	<label for="email2"> Listing Amenities (Separate With Comma) *</label>
																	<input type="text" class="form-control" placeholder="Listing Amenities e.g Parking Space" name = "listing_amenities" required> 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																	<label for="email2"> Listing Price *</label>
																	<input type="number" class="form-control" placeholder="Listing Price" name = "listing_price" required> 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																	<label for="email2"> Featured image*</label>
																	<input  type="file" name="post_pic" class="form-control"  required> 
																</div> 
															</div>  
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-sm-12"> Post Details </label>
																	<input name="listing_details" id="inp_htmlcode" type="hidden" />
																	<div id="div_editor1" class="richtexteditor" style="width: 900px;margin:0 auto;">
																	</div>
																	<script>
																		var editor1 = new RichTextEditor(document.getElementById("div_editor1"));
																		editor1.attachEvent("change", function () {
																			document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
																		});
																	</script>
																</div>
															</div>
															</div>
													<div class="modal-footer no-bd">
														<button  type="submit" class="btn btn-primary" value = "Publish Listing" name = "add">  Submit </button> 
														<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													</div>
																																													
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>