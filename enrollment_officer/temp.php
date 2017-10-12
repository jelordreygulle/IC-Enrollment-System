



						<table class="tftable" border="2">
						<tr>
									
									<th width="100%" colspan="5"><center>Subject</center></th>
									
									
						</tr>
					
						<tr>
						  	<td><center><strong>First Year, First Semester</strong></center></td>
						  	<td><center><strong>Second Year, First Semester</strong></center></td>
						  	<td><center><strong>Third Year, First Semester</strong></center></td>
						  	<td><center><strong>Fourth Year, First Semester</strong></center></td>
						  	<td><center><strong>Fifth Year, First Semester</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>






						
						<tr>
						  	<td><center><strong>First Year, Second Semester</strong></center></td>
						  	<td><center><strong>Second Year, Second Semester</strong></center></td>
						  	<td><center><strong>Third Year, Second Semester</strong></center></td>
						  	<td><center><strong>Fourth Year, Second Semester</strong></center></td>
						  	<td><center><strong>Fifth Year, Second Semester</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>
						


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" required>
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						
						<tr>
						  	<td><center><strong>First Year, Summer</strong></center></td>
						  	<td><center><strong>Second Year, Summer</strong></center></td>
						  	<td><center><strong>Third Year, Summer</strong></center></td>
						  	<td><center><strong>Fourth Year, Summer</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]" required>
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]" required>
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]" required>
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]" required>
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						

				</table>
				
					<br>		
				