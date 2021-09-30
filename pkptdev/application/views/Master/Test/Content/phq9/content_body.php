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
									<h5><span>Ujian ini mengandungi 9 soalan.</span><br>
										<i>This test contains 9 questions.</i>
									</h5>
								</li>
								<li>
									<h5><span>Sila baca kenyataan dan pilih jawapan yang menggambarkan keadaan anda dalam tempoh 2 MINGGU yang lepas.</span><br>
										<i>Please read the statement and choose the answer that describes your situation in the last 2 WEEKS.</i>
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
									<span>Dalam tempoh 2 minggu, berapa kerap kali anda terganggu oleh masalah berikut?</span>
									<br>
									<i>Over the last 2 weeks, how often have you been bothered by any of the following problems?</i>
								</strong>
							</h5>
						</div>
						<form action='<?php echo base_url('index.php/'); ?>test/phqresult' method='POST'>
							<br>
							<div id="phqq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Sedikit minat atau keseronokan dalam melakukan kerja-kerja.</span>
										<br>
										<i>1. Little interest or pleasure in doing things.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq1' type="radio" value="0" onclick="phqjs1()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq1' type="radio" value="1" onclick="phqjs1()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq1' type="radio" value="2" onclick="phqjs1()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq1' type="radio" value="3" onclick="phqjs1()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Berasa murung, sedih atau tiada harapan.</span>
										<br>
										<i>2. Feeling down, depressed or hopeless.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq2' type="radio" value="0" onclick="phqjs2()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq2' type="radio" value="1" onclick="phqjs2()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq2' type="radio" value="2" onclick="phqjs2()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq2' type="radio" value="3" onclick="phqjs2()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Masalah hendak tidur/semasa tidur, tidur terlalu banyak.</span>
										<br>
										<i>3. Trouble failing, or staying asleep, sleeping too much.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq3' type="radio" value="0" onclick="phqjs3()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq3' type="radio" value="1" onclick="phqjs3()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq3' type="radio" value="2" onclick="phqjs3()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq3' type="radio" value="3" onclick="phqjs3()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Berasa letih atau kurang bertenaga.</span>
										<br>
										<i>4. Feeling tired or having little energy.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq4' type="radio" value="0" onclick="phqjs4()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq4' type="radio" value="1" onclick="phqjs4()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq4' type="radio" value="2" onclick="phqjs4()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq4' type="radio" value="3" onclick="phqjs4()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Kurang selera atau terlalu banyak makan.</span>
										<br>
										<i>5. Poor appetite or overeating.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq5' type="radio" value="0" onclick="phqjs5()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq5' type="radio" value="1" onclick="phqjs5()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq5' type="radio" value="2" onclick="phqjs5()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq5' type="radio" value="3" onclick="phqjs5()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Mempunyai perasaan buruk terhadap diri sendiri atau berasa gagal terhadap diri sendiri atau menghampakan diri atau keluarga.</span>
										<br>
										<i>6. Feeling bad about yourself or that you are a failure or have let yourself or your family down.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq6' type="radio" value="0" onclick="phqjs6()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq6' type="radio" value="1" onclick="phqjs6()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq6' type="radio" value="2" onclick="phqjs6()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq6' type="radio" value="3" onclick="phqjs6()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Masalah menumpukan perhatian terhadap perkara-perkara seperti membaca surat khabar atau menonton televisyen.</span>
										<br>
										<i>7. Trouble concentrating on things, such as reading the newspaper or watching television.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq7' type="radio" value="0" onclick="phqjs7()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq7' type="radio" value="1" onclick="phqjs7()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq7' type="radio" value="2" onclick="phqjs7()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq7' type="radio" value="3" onclick="phqjs7()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq8" class="testbox">
								<div>
									<h5 class="text-center">
										<span>8. Bergerak atau bercakap dengan terlalu lambat sehingga disedari oleh orang lain. Atau bertentangan, terlalu berasa resah atau gelisah sehingga anda bergerak lebih dari biasa.</span>
										<br>
										<i>8. Moving or speaking so slowly that other people could have noticed. Or the opposite, being so fidgety or restless that you have been moving around a lot more than usual.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq8' type="radio" value="0" onclick="phqjs8()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq8' type="radio" value="1" onclick="phqjs8()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq8' type="radio" value="2" onclick="phqjs8()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq8' type="radio" value="3" onclick="phqjs8()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqq9" class="testbox">
								<div>
									<h5 class="text-center">
										<span>9. Berfikiran bahawa lebih elok jika anda telah mati atau ingin mencederakan diri anda dalam sesuatu cara.</span>
										<br>
										<i>9. Thoughts that you would be better off dead or hurting yourself in some way.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq9' type="radio" value="0" onclick="phqjs9()" required> Tidak pernah sama sekali<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq9' type="radio" value="1" onclick="phqjs9()" required>Beberapa hari<br>
											<i>Several days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq9' type="radio" value="2" onclick="phqjs9()" required>Lebih dari seminggu<br>
											<i>More than half days</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qphq9' type="radio" value="3" onclick="phqjs9()" required>Hampir setiap hari<br>
											<i>Nearly every day</i>
										</label>
									</div>
								</div>
							</div>
							<div id="phqans">
								<h5 class="text-center">You Have finished the assessment</h5>
								<br>
								<h5 class="text-center">Please counsult your counselor regarding your result.</h5>
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