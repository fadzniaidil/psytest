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
						<form action='<?php echo base_url('index.php/'); ?>test/dassresult' method='POST'>
							<br>
							<div id="dassq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Saya dapati diri saya susah untuk bertenang.</span>
										<br>
										<i>1. I found it hard to wind down.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass1' type="radio" value="0" onclick="dassjs1()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass1' type="radio" value="1" onclick="dassjs1()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass1' type="radio" value="2" onclick="dassjs1()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass1' type="radio" value="3" onclick="dassjs1()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Saya sedar mulut saya terasa kering.</span>
										<br>
										<i>2. I was aware of dryness of my mouth.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass2' type="radio" value="0" onclick="dassjs2()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass2' type="radio" value="1" onclick="dassjs2()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass2' type="radio" value="2" onclick="dassjs2()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass2' type="radio" value="3" onclick="dassjs2()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Saya seolah-olah tidak dapat mengalami perasaan positif sama sekali.</span>
										<br>
										<i>3. I couldn't seem to experience any positive feeling at all.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass3' type="radio" value="0" onclick="dassjs3()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass3' type="radio" value="1" onclick="dassjs3()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass3' type="radio" value="2" onclick="dassjs3()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass3' type="radio" value="3" onclick="dassjs3()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Saya mengalami kesukaran bernafas contohnya bernafas terlalu cepat, tercungap–cungap walaupun tidak melakukan aktiviti fizikal.</span>
										<br>
										<i>4. I experience breathing difficulty (e.g excessively rapid breathing, breathlessness in the absence of physical exertion).</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass4' type="radio" value="0" onclick="dassjs4()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass4' type="radio" value="1" onclick="dassjs4()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass4' type="radio" value="2" onclick="dassjs4()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass4' type="radio" value="3" onclick="dassjs4()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Saya rasa tidak bersemangat untuk memulakan sesuatu keadaan.</span>
										<br>
										<i>5. I found it difficult work up the initiative to do things.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass5' type="radio" value="0" onclick="dassjs5()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass5' type="radio" value="1" onclick="dassjs5()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass5' type="radio" value="2" onclick="dassjs5()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass5' type="radio" value="3" onclick="dassjs5()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Saya cenderung bertindak secara berlebihan kepada sesuatu keadaan.</span>
										<br>
										<i>6. I tended to over-react to situations.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass6' type="radio" value="0" onclick="dassjs6()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass6' type="radio" value="1" onclick="dassjs6()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass6' type="radio" value="2" onclick="dassjs6()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass6' type="radio" value="3" onclick="dassjs6()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Saya pernah menggeletar (contohnya pada tangan).</span>
										<br>
										<i>7. I experienced trembling (e.g. in the hands).</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass7' type="radio" value="0" onclick="dassjs7()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass7' type="radio" value="1" onclick="dassjs7()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass7' type="radio" value="2" onclick="dassjs7()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass7' type="radio" value="3" onclick="dassjs7()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq8" class="testbox">
								<div>
									<h5 class="text-center">
										<span>8. Saya rasa saya terlalu gelisah.</span>
										<br>
										<i>8. I felt that I was using a lot of nervous energy.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass8' type="radio" value="0" onclick="dassjs8()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass8' type="radio" value="1" onclick="dassjs8()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass8' type="radio" value="2" onclick="dassjs8()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass8' type="radio" value="3" onclick="dassjs8()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq9" class="testbox">
								<div>
									<h5 class="text-center">
										<span>9. Saya bimbang keadaan di mana saya mungkin menjadi panik dan melakukan perkara yang membodohkan diri sendiri.</span>
										<br>
										<i>9. I was worried about situations in which I might panic and make a fool of myself.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass9' type="radio" value="0" onclick="dassjs9()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass9' type="radio" value="1" onclick="dassjs9()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass9' type="radio" value="2" onclick="dassjs9()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass9' type="radio" value="3" onclick="dassjs9()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq10" class="testbox">
								<div>
									<h5 class="text-center">
										<span>10. Saya rasa tidak ada apa yang saya harapkan (Putus Harapan).</span>
										<br>
										<i>10. I felt that I had nothing to look forward to.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass10' type="radio" value="0" onclick="dassjs10()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass10' type="radio" value="1" onclick="dassjs10()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass10' type="radio" value="2" onclick="dassjs10()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass10' type="radio" value="3" onclick="dassjs10()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq11" class="testbox">
								<div>
									<h5 class="text-center">
										<span>11. Saya dapati saya mudah resah.</span>
										<br>
										<i>11. I found myself getting agitated.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass11' type="radio" value="0" onclick="dassjs11()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass11' type="radio" value="1" onclick="dassjs11()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass11' type="radio" value="2" onclick="dassjs11()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass11' type="radio" value="3" onclick="dassjs11()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq12" class="testbox">
								<div>
									<h5 class="text-center">
										<span>12. Saya merasa sukar untuk relaks.</span>
										<br>
										<i>12. I found it difficult to relax.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass12' type="radio" value="0" onclick="dassjs12()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass12' type="radio" value="1" onclick="dassjs12()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass12' type="radio" value="2" onclick="dassjs12()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass12' type="radio" value="3" onclick="dassjs12()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq13" class="testbox">
								<div>
									<h5 class="text-center">
										<span>13. Saya rasa muram dan sedih.</span>
										<br>
										<i>13. I felt down-hearted and blue.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass13' type="radio" value="0" onclick="dassjs13()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass13' type="radio" value="1" onclick="dassjs13()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass13' type="radio" value="2" onclick="dassjs13()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass13' type="radio" value="3" onclick="dassjs13()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq14" class="testbox">
								<div>
									<h5 class="text-center">
										<span>14. Saya tidak boleh terima apa jua yang menghalangi saya daripada meneruskan apa yang sedang saya lakukan.</span>
										<br>
										<i>14. I was intolerent of anything that kept me from getting on with what I was doing.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass14' type="radio" value="0" onclick="dassjs14()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass14' type="radio" value="1" onclick="dassjs14()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass14' type="radio" value="2" onclick="dassjs14()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass14' type="radio" value="3" onclick="dassjs14()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq15" class="testbox">
								<div>
									<h5 class="text-center">
										<span>15. Saya rasa hampir panik.</span>
										<br>
										<i>15. I felt I was close to panic.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass15' type="radio" value="0" onclick="dassjs15()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass15' type="radio" value="1" onclick="dassjs15()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass15' type="radio" value="2" onclick="dassjs15()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass15' type="radio" value="3" onclick="dassjs15()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq16" class="testbox">
								<div>
									<h5 class="text-center">
										<span>16. Saya tidak bersemangat langsung.</span>
										<br>
										<i>16. I was unable to become enthusiastic about anything.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass16' type="radio" value="0" onclick="dassjs16()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass16' type="radio" value="1" onclick="dassjs16()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass16' type="radio" value="2" onclick="dassjs16()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass16' type="radio" value="3" onclick="dassjs16()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq17" class="testbox">
								<div>
									<h5 class="text-center">
										<span>17. Saya rasa diri saya tidak berharga.</span>
										<br>
										<i>17. I felt I wasn't worth much as a person.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass17' type="radio" value="0" onclick="dassjs17()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass17' type="radio" value="1" onclick="dassjs17()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass17' type="radio" value="2" onclick="dassjs17()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass17' type="radio" value="3" onclick="dassjs17()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq18" class="testbox">
								<div>
									<h5 class="text-center">
										<span>18. Saya mudah tersinggung.</span>
										<br>
										<i>18. I felt that I was rather touchy.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass18' type="radio" value="0" onclick="dassjs18()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass18' type="radio" value="1" onclick="dassjs18()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass18' type="radio" value="2" onclick="dassjs18()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass18' type="radio" value="3" onclick="dassjs18()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq19" class="testbox">
								<div>
									<h5 class="text-center">
										<span>19. Walaupun saya tidak melakukan aktiviti fizikal, saya sedar akan debaran jantung saya (contohnya degupan jantung lebih cepat).</span>
										<br>
										<i>19. I was aware of the action of my heart in the absence of physical exertion (e.g. sense of heart rate increase, heart missing a beat).</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass19' type="radio" value="0" onclick="dassjs19()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass19' type="radio" value="1" onclick="dassjs19()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass19' type="radio" value="2" onclick="dassjs19()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass19' type="radio" value="3" onclick="dassjs19()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq20" class="testbox">
								<div>
									<h5 class="text-center">
										<span>20. Saya berasa takut tanpa sebab yang munasabah.</span>
										<br>
										<i>20. I felt scared without any good reason.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass20' type="radio" value="0" onclick="dassjs20()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass20' type="radio" value="1" onclick="dassjs20()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass20' type="radio" value="2" onclick="dassjs20()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass20' type="radio" value="3" onclick="dassjs20()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassq21" class="testbox">
								<div>
									<h5 class="text-center">
										<span>21. Saya rasa hidup ini tidak bermakna.</span>
										<br>
										<i>21. I felt that life was meaningless.</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass21' type="radio" value="0" onclick="dassjs21()" required> Tidak pernah<br>
											<i>Never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass21' type="radio" value="1" onclick="dassjs21()" required> Jarang<br>
											<i>Almost never</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass21' type="radio" value="2" onclick="dassjs21()" required> Kerap<br>
											<i>Often</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qdass21' type="radio" value="3" onclick="dassjs21()" required> Sangat kerap<br>
											<i>Very often</i>
										</label>
									</div>
								</div>
							</div>
							<div id="dassans">
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