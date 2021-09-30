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
									<h5><span>Ujian ini mengandungi 21 soalan.</span><br>
										<i>This test contains 21 questions.</i>
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
						<form action='<?php echo base_url('index.php/'); ?>test/bairesult' method='POST'>
							<br>
							<div id="baiq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Kebas atau rasa mencucuk</span>
										<br>
										<i>1. Numbness or tingling</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai1' type="radio" value="0" onclick="baijs1()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai1' type="radio" value="1" onclick="baijs1()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai1' type="radio" value="2" onclick="baijs1()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai1' type="radio" value="3" onclick="baijs1()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Rasa panas</span>
										<br>
										<i>2. Feeling hot</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai2' type="radio" value="0" onclick="baijs2()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai2' type="radio" value="1" onclick="baijs2()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai2' type="radio" value="2" onclick="baijs2()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai2' type="radio" value="3" onclick="baijs2()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Jalan terhuyung-hayang</span>
										<br>
										<i>3. Wobbliness in legs</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai3' type="radio" value="0" onclick="baijs3()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai3' type="radio" value="1" onclick="baijs3()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai3' type="radio" value="2" onclick="baijs3()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai3' type="radio" value="3" onclick="baijs3()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Sukar untuk bertenang</span>
										<br>
										<i>4. Unable to relax</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai4' type="radio" value="0" onclick="baijs4()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai4' type="radio" value="1" onclick="baijs4()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai4' type="radio" value="2" onclick="baijs4()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai4' type="radio" value="3" onclick="baijs4()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Takut perkara amat buruk akan berlaku</span>
										<br>
										<i>5. Fear of worst happening</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai5' type="radio" value="0" onclick="baijs5()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai5' type="radio" value="1" onclick="baijs5()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai5' type="radio" value="2" onclick="baijs5()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai5' type="radio" value="3" onclick="baijs5()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Bingung atau sedikit pening</span>
										<br>
										<i>6. Dizzy or lightheaded</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai6' type="radio" value="0" onclick="baijs6()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai6' type="radio" value="1" onclick="baijs6()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai6' type="radio" value="2" onclick="baijs6()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai6' type="radio" value="3" onclick="baijs6()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Hati berdebar-debar atau berdegup kencang</span>
										<br>
										<i>7. Heart pounding / racing</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai7' type="radio" value="0" onclick="baijs7()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai7' type="radio" value="1" onclick="baijs7()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai7' type="radio" value="2" onclick="baijs7()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai7' type="radio" value="3" onclick="baijs7()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq8" class="testbox">
								<div>
									<h5 class="text-center">
										<span>8. Tak tetap</span>
										<br>
										<i>8. Unsteady</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai8' type="radio" value="0" onclick="baijs8()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai8' type="radio" value="1" onclick="baijs8()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai8' type="radio" value="2" onclick="baijs8()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai8' type="radio" value="3" onclick="baijs8()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq9" class="testbox">
								<div>
									<h5 class="text-center">
										<span>9. Sangat takut</span>
										<br>
										<i>9. Terrified or afraid</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai9' type="radio" value="0" onclick="baijs9()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai9' type="radio" value="1" onclick="baijs9()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai9' type="radio" value="2" onclick="baijs9()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai9' type="radio" value="3" onclick="baijs9()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq10" class="testbox">
								<div>
									<h5 class="text-center">
										<span>Gelisah</span>
										<br>
										<i>Nervous</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai10' type="radio" value="0" onclick="baijs10()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai10' type="radio" value="1" onclick="baijs10()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai10' type="radio" value="2" onclick="baijs10()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai10' type="radio" value="3" onclick="baijs10()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq11" class="testbox">
								<div>
									<h5 class="text-center">
										<span>11. Rasa tercekik</span>
										<br>
										<i>11. Feeling of choking</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai11' type="radio" value="0" onclick="baijs11()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai11' type="radio" value="1" onclick="baijs11()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai11' type="radio" value="2" onclick="baijs11()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai11' type="radio" value="3" onclick="baijs11()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq12" class="testbox">
								<div>
									<h5 class="text-center">
										<span>12. Tangan menggeletar</span>
										<br>
										<i>12. Hands trembling</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai12' type="radio" value="0" onclick="baijs12()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai12' type="radio" value="1" onclick="baijs12()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai12' type="radio" value="2" onclick="baijs12()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai12' type="radio" value="3" onclick="baijs12()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq13" class="testbox">
								<div>
									<h5 class="text-center">
										<span>13. Gementar</span>
										<br>
										<i>13. Shaky / Unsteady</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai13' type="radio" value="0" onclick="baijs13()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai13' type="radio" value="1" onclick="baijs13()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai13' type="radio" value="2" onclick="baijs13()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai13' type="radio" value="3" onclick="baijs13()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq14" class="testbox">
								<div>
									<h5 class="text-center">
										<span>14. Takut hilang kawalan</span>
										<br>
										<i>14. Fear of losing control</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai14' type="radio" value="0" onclick="baijs14()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai14' type="radio" value="1" onclick="baijs14()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai14' type="radio" value="2" onclick="baijs14()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai14' type="radio" value="3" onclick="baijs14()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq15" class="testbox">
								<div>
									<h5 class="text-center">
										<span>15. Sukar untuk bernafas</span>
										<br>
										<i>15. Difficulty in breathing</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai15' type="radio" value="0" onclick="baijs15()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai15' type="radio" value="1" onclick="baijs15()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai15' type="radio" value="2" onclick="baijs15()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai15' type="radio" value="3" onclick="baijs15()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq16" class="testbox">
								<div>
									<h5 class="text-center">
										<span>16. Takut mati</span>
										<br>
										<i>16. Fear of dying</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai16' type="radio" value="0" onclick="baijs16()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai16' type="radio" value="1" onclick="baijs16()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai16' type="radio" value="2" onclick="baijs16()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai16' type="radio" value="3" onclick="baijs16()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq17" class="testbox">
								<div>
									<h5 class="text-center">
										<span>17. Gentar</span>
										<br>
										<i>17. Scared</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai17' type="radio" value="0" onclick="baijs17()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai17' type="radio" value="1" onclick="baijs17()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai17' type="radio" value="2" onclick="baijs17()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai17' type="radio" value="3" onclick="baijs17()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq18" class="testbox">
								<div>
									<h5 class="text-center">
										<span>18. Ketakcernaan dan ketakselesaan</span>
										<br>
										<i>18. Indigestion</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai18' type="radio" value="0" onclick="baijs18()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai18' type="radio" value="1" onclick="baijs18()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai18' type="radio" value="2" onclick="baijs18()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai18' type="radio" value="3" onclick="baijs18()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq19" class="testbox">
								<div>
									<h5 class="text-center">
										<span>19. Pengsan</span>
										<br>
										<i>19. Faint / lightheaded</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai19' type="radio" value="0" onclick="baijs19()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai19' type="radio" value="1" onclick="baijs19()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai19' type="radio" value="2" onclick="baijs19()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai19' type="radio" value="3" onclick="baijs19()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq20" class="testbox">
								<div>
									<h5 class="text-center">
										<span>20. Muka merah padam</span>
										<br>
										<i>20. Face flushed</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai20' type="radio" value="0" onclick="baijs20()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai20' type="radio" value="1" onclick="baijs20()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai20' type="radio" value="2" onclick="baijs20()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai20' type="radio" value="3" onclick="baijs20()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baiq21" class="testbox">
								<div>
									<h5 class="text-center">
										<span>21. Berpeluh bukan kerana panas</span>
										<br>
										<i>21. Hot / cold sweats</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai21' type="radio" value="0" onclick="baijs21()" required> Tak ada Langsung<br>
											<i>Not at all</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai21' type="radio" value="1" onclick="baijs21()" required> Sedikit sahaja<br>
											<i>Mildly, but it didn't bother me much</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai21' type="radio" value="2" onclick="baijs21()" required> Sederhana<br>
											<i>Moderately - it wasn't pleasant at times</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbai21' type="radio" value="3" onclick="baijs21()" required> Sangat teruk<br>
											<i>Severely - it bothered me a lot</i>
										</label>
									</div>
								</div>
							</div>
							<div id="baians">
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