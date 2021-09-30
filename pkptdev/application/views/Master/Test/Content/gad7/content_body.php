<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-primary card-outline">
					<div id="inst" class="card-body">
						<div class="card-header">
							<h4 class="text-center">Arahan<span><br><i>Instruction</i></span></h4>
							<ul>
								<li><h5><span>Ujian ini mengandungi 7 soalan.</span><br>
									<i>This test contains 7 questions.</i>
								</h5></li>
								<li><h5><span>Sila baca kenyataan dan pilih jawapan yang menggambarkan keadaan anda dalam tempoh 2 MINGGU yang lepas.</span><br>
									<i>Please read the statement and choose the answer that describes your situation in the last 2 WEEKS.</i></h5></li>
								<li><h5><span>Tiada ada jawapan yg betul atau salah.</span>
									<br><i>There are no right or wrong answers.</i></h5></li>
								<li><h5><span>JANGAN terlalu banyak mengunnakan masa untuk mana-mana kenyataan.</span><br><i>DO NOT spend too much time on any statement.</i></h5></li>
								<li><h5><span>Jika anda sudah bersedia sila tekan butang MULA.</span><br><i>If you are ready please press the START button.</i></h5></li>
							</ul>
						</div>
						<button class="btn btn-primary btn-block" onclick="startquest()"><span>MULA</span><br><i>START</i></button>
					</div>
					<div id="quest" class="card-body">
						<div class="card-header">
							<h5 class="text-center">
								<strong>
									<span>Dalam tempoh 2 minggu, berapa kerap kali anda terganggu oleh masalah berikut?</span>
									<br>
									<i>Over the last 2 weeks, how often have you been bothered by any of the following problems?</i>
								</strong>
							</h5>
						</div>
						<form action='<?php echo base_url('index.php/');?>test/gadresult' method='POST'>
							<br>
							<div id="gadq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Berasa resah, gelisah atau tegang.</span>
										<br>
										<i>1. Feeling nervous, anxious on edge.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad1' type="radio" value="0" onclick="gadjs1()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad1' type="radio" value="1" onclick="gadjs1()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad1' type="radio" value="2" onclick="gadjs1()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad1' type="radio" value="3" onclick="gadjs1()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Tidak dapat menghentikan atau mengawal kebimbangan.</span>
										<br>
										<i>2. Not being able to stop or control worrying.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad2' type="radio" value="0" onclick="gadjs2()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad2' type="radio" value="1" onclick="gadjs2()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad2' type="radio" value="2" onclick="gadjs2()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad2' type="radio" value="3" onclick="gadjs2()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Terlalu bimbang mengenai pelbagai perkara yang berlainan.</span>
										<br>
										<i>3. Worrying too much about different things.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad3' type="radio" value="0" onclick="gadjs3()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad3' type="radio" value="1" onclick="gadjs3()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad3' type="radio" value="2" onclick="gadjs3()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad3' type="radio" value="3" onclick="gadjs3()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Mempunyai masalah untuk bertenang.</span>
										<br>
										<i>4. Having trouble relaxing.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad4' type="radio" value="0" onclick="gadjs4()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad4' type="radio" value="1" onclick="gadjs4()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad4' type="radio" value="2" onclick="gadjs4()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad4' type="radio" value="3" onclick="gadjs4()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Terlalu resah sehingga susah untuk berdiam diri.</span>
										<br>
										<i>5. Feing so restless that it is hard to sit still.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad5' type="radio" value="0" onclick="gadjs5()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad5' type="radio" value="1" onclick="gadjs5()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad5' type="radio" value="2" onclick="gadjs5()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad5' type="radio" value="3" onclick="gadjs5()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Mudah menjadi rimas dan menjengkelkan.</span>
										<br>
										<i>6. Being easily annoyed or irritable.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad6' type="radio" value="0" onclick="gadjs6()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad6' type="radio" value="1" onclick="gadjs6()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad6' type="radio" value="2" onclick="gadjs6()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad6' type="radio" value="3" onclick="gadjs6()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Berasa takut bahawa sesuatu yang buruk akan terjadi.</span>
										<br>
										<i>7. Feeling afraid as if something awful might happen.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad7' type="radio" value="0" onclick="gadjs7()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad7' type="radio" value="1" onclick="gadjs7()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad7' type="radio" value="2" onclick="gadjs7()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qgad7' type="radio" value="3" onclick="gadjs7()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="gadans">
								<h5 class="text-center">You Have finished the assessment</h5>
								<br>
								<h5 class="text-center">Please counsult your conselor regarding your result.</h5>
								<br>
								<button class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>