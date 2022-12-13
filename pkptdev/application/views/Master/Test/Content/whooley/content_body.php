<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-primary card-outline">
					<div id="inst" class="card-body">
						<div class="card-header">
							<h4 class="text-center">Arahan<span><br><i>Instruction</i></span></h4>
							<ul>
								<li>
									<h5><span>Ujian ini mengandungi 2 soalan.</span><br>
										<i>This test contains 2 questions.</i>
									</h5>
								</li>
								<li>
									<h5><span>Sila baca kenyataan dan pilih jawapan yang menggambarkan keadaan anda dalam tempoh SEBULAN yang lepas.</span><br>
										<i>Please read the statement and choose the answer that describes your situation in the last one MONTH.</i>
									</h5>
								</li>
								<li>
									<h5><span>Tiada ada jawapan yg betul atau salah.</span>
										<br><i>There are no right or wrong answers.</i>
									</h5>
								</li>
								<li>
									<h5><span>JANGAN terlalu banyak mengunnakan masa untuk mana-mana kenyataan.</span><br><i>DO NOT spend too much time on any statement.</i></h5>
								</li>
								<li>
									<h5><span>Jika anda sudah bersedia sila tekan butang MULA.</span><br><i>If you are ready please press the START button.</i></h5>
								</li>
							</ul>
						</div>
						<button class="btn btn-primary btn-block" onclick="startquest()"><span>MULA</span><br><i>START</i></button>
					</div>
					<div id="quest" class="card-body">
						<div class="card-header">
							<h5 class="text-center">
								<strong>
									<span>Dalam tempoh sebulan yang lepas, adakah anda terganggu oleh masalah berikut?</span>
									<br>
									<i>Over the past one month, have you been bothered by the following problems?</i>
								</strong>
							</h5>
						</div>
						<form action='<?php echo base_url('index.php/'); ?>test/whooleyresult' method='POST'>
							<br>
							<div id="whoq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Berasa murung sedih atau tiada harapan?</span>
										<br>
										<i>1. Feeling down, depressed or hopeless?</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qwho1' type="radio" value="1" onclick="whojs1()" required> Ya<br>
											<i>Yes</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qwho1' type="radio" value="0" onclick="whojs1()" required>Tidak<br>
											<i>No</i>
										</label>
									</div>
								</div>
							</div>
							<div id="whoq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Kurang minat atau keseronokan dalam melakukan kerja-kerja?</span>
										<br>
										<i>2. Having little interest or pleasure in doing thing?</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qwho2' type="radio" value="1" onclick="whojs2()" required> Ya<br>
											<i>Yes</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qwho2' type="radio" value="0" onclick="whojs2()" required>Tidak<br>
											<i>No</i>
										</label>
									</div>
								</div>
							</div>
							<div id="whoans">
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