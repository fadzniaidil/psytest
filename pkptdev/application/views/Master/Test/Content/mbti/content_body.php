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
									<h5><span>Ujian ini mengandungi 70 soalan.</span><br>
										<i>This test contains 70 questions.</i>
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
						<form action='<?php echo base_url('index.php/'); ?>test/mbtiresult' method='POST'>
							<br>
							<div id="mbtiq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Pada majlis keramaian, adakah anda:</span>
										<br>
										<i>1. At a party, do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti1' type="radio" value="-1" onclick="mbtijs1()" required> Berinteraksi dengan orang ramai termasuk dengan orang yang tidak dikenali.<br>
											<i>Interact with many, including strangers.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti1' type="radio" value="1" onclick="mbtijs1()" required> Berinteraksi dengan beberapa orang sahaja, orang yang anda kenali.<br>
											<i>Interact with a few, known to you.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Adakah anda lebih:</span>
										<br>
										<i>2. Are you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti2' type="radio" value="-1" onclick="mbtijs2()" required> Realistik berbanding spekulatif.<br>
											<i>Realistic than speculative.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti2' type="radio" value="1" onclick="mbtijs2()" required> Spekulatif berbanding realistik.<br>
											<i>Speculative than realistic.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Adakah lebih teruk untuk:</span>
										<br>
										<i>3. Is it worse to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti3' type="radio" value="-1" onclick="mbtijs3()" required> Hidup yang tidak tentu arah.<br>
											<i>Have your “head in the clouds”.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti3' type="radio" value="1" onclick="mbtijs3()" required> Hidup yang rutin.<br>
											<i>Be “in a rut”.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Adakah anda lebih kagum dengan:</span>
										<br>
										<i>4. Are you more impressed by:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti4' type="radio" value="-1" onclick="mbtijs4()" required> Prinsip.<br>
											<i>Principles.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti4' type="radio" value="1" onclick="mbtijs4()" required> Emosi.<br>
											<i>Emotions.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Anda lebih dipengaruhi oleh:</span>
										<br>
										<i>5. Are more drawn toward the:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti5' type="radio" value="-1" onclick="mbtijs5()" required> Sesuatu yang meyakinkan.<br>
											<i>Convincing.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti5' type="radio" value="1" onclick="mbtijs5()" required> Sesuatu yang menyentuh perasaan.<br>
											<i>Emotions.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Anda lebih suka bekerja:</span>
										<br>
										<i>6. Do you prefer to work:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti6' type="radio" value="-1" onclick="mbtijs6()" required> Hingga tarikh akhir saja.<br>
											<i>To deadlines.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti6' type="radio" value="1" onclick="mbtijs6()" required> Bila-bila masa saja.<br>
											<i>Just “whenever”.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Anda cenderung untuk memilih:</span>
										<br>
										<i>7. Do you tend to choose:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti7' type="radio" value="-1" onclick="mbtijs7()" required> Dengan berhati-hati.<br>
											<i>Rather carefully.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti7' type="radio" value="1" onclick="mbtijs7()" required> Dengan gerak hati.<br>
											<i>Somewhat impulsively.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq8" class="testbox">
								<div>
									<h5 class="text-center">
										<span>8. Pada majlis keramaian, adakah anda:</span>
										<br>
										<i>8. At parties do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti8' type="radio" value="-1" onclick="mbtijs8()" required> Terus berada pada majlis tersebut, dengan tenaga / semangat yang bertambah.<br>
											<i>Stay late, with increasing energy.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti8' type="radio" value="1" onclick="mbtijs8()" required> Pulang awal daripada majlis, dengan tenaga / semangat yang berkurangan.<br>
											<i>Leave early with decreased energy.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq9" class="testbox">
								<div>
									<h5 class="text-center">
										<span>9. Adakah anda lebih tertarik dengan:</span>
										<br>
										<i>9. Are you more attracted to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti9' type="radio" value="-1" onclick="mbtijs9()" required> Orang yang sensible (Praktikal).<br>
											<i>Sensible people.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti9' type="radio" value="1" onclick="mbtijs9()" required> Orang yang imaginatif.<br>
											<i>Imaginative people.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq10" class="testbox">
								<div>
									<h5 class="text-center">
										<span>10. Anda lebih berminat dengan:</span>
										<br>
										<i>10. Are you more attracted to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti10' type="radio" value="-1" onclick="mbtijs10()" required> Apa yang sebenar.<br>
											<i>What is actual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti10' type="radio" value="1" onclick="mbtijs10()" required> Apa yang berkemungkinan.<br>
											<i>What is possible.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq11" class="testbox">
								<div>
									<h5 class="text-center">
										<span>11. Dalam menilai orang lain, adakah anda lebih dipengaruhi oleh:</span>
										<br>
										<i>11. In judging others are you more swayed by:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti11' type="radio" value="-1" onclick="mbtijs11()" required> Peraturan / undang-undang berbanding keadaan.<br>
											<i>Laws than circumstances.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti11' type="radio" value="1" onclick="mbtijs11()" required> Keadaan berbanding peraturan / undang-undang .<br>
											<i>Circumstances than laws.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq12" class="testbox">
								<div>
									<h5 class="text-center">
										<span>12. Dalam mendekati seseorang, adakah anda bersifat:</span>
										<br>
										<i>12. In approaching others is your inclination to be somewhat:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti12' type="radio" value="-1" onclick="mbtijs12()" required> Objektif.<br>
											<i>Objective.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti12' type="radio" value="1" onclick="mbtijs12()" required> Personal.<br>
											<i>Personal.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq13" class="testbox">
								<div>
									<h5 class="text-center">
										<span>13. Adakah anda lebih:</span>
										<br>
										<i>13. Are you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti13' type="radio" value="-1" onclick="mbtijs13()" required> Menepati masa.<br>
											<i>Punctual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti13' type="radio" value="1" onclick="mbtijs13()" required> Santai.<br>
											<i>Leisurely.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq14" class="testbox">
								<div>
									<h5 class="text-center">
										<span>14. Adakah ia mengganggu anda apabila sesuatu:</span>
										<br>
										<i>14. Does it bother you more having things:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti14' type="radio" value="-1" onclick="mbtijs14()" required> Tidak lengkap.<br>
											<i>Incomplete.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti14' type="radio" value="1" onclick="mbtijs14()" required> Telah dilengkapkan.<br>
											<i>Completed.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq15" class="testbox">
								<div>
									<h5 class="text-center">
										<span>15. Dalam kumpulan sosial anda, adakah anda:</span>
										<br>
										<i>15. In your social groups, do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti15' type="radio" value="-1" onclick="mbtijs15()" required> Turut serta di dalam keseronokan orang lain.<br>
											<i>Keep abreast of other's happenings.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti15' type="radio" value="1" onclick="mbtijs15()" required> Dapatkan berita kemudian.<br>
											<i>Get behind on the news.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq16" class="testbox">
								<div>
									<h5 class="text-center">
										<span>16. Dalam melakukan sesuatu yang normal/biasa, adakah anda lebih cenderung untuk:</span>
										<br>
										<i>16. In doing ordinary things are you more likely to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti16' type="radio" value="-1" onclick="mbtijs16()" required> Melakukannya dengan cara yang biasa (yang selalu dilakukan oleh orang ramai).<br>
											<i>Do it the usual way.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti16' type="radio" value="1" onclick="mbtijs16()" required> Melakukannya dengan cara anda sendiri.<br>
											<i>Do it your own way.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq17" class="testbox">
								<div>
									<h5 class="text-center">
										<span>17. Para penulis sepatutnya:</span>
										<br>
										<i>17. Writers should:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti17' type="radio" value="-1" onclick="mbtijs17()" required> Menuturkan apa yang dimaksudkan dan maksudkan apa yang dituturkan.<br>
											<i>"Say what they mean and mean what they say".</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti17' type="radio" value="1" onclick="mbtijs17()" required> Menggunakan analogi untuk menerangkan sesuatu dengan lebih mendalam.<br>
											<i>Express things more by use of analogy.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq18" class="testbox">
								<div>
									<h5 class="text-center">
										<span>18. Manakah yang lebih disukai oleh anda:</span>
										<br>
										<i>18. Which appeals to you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti18' type="radio" value="-1" onclick="mbtijs18()" required> Pemikiran yang konsisten.<br>
											<i>Consistency of thought.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti18' type="radio" value="1" onclick="mbtijs18()" required> Hubungan harmoni sesama manusia.<br>
											<i>Harmonious human relationship.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq19" class="testbox">
								<div>
									<h5 class="text-center">
										<span>19. Adakah anda lebih selesa dalam melakukan:</span>
										<br>
										<i>19. Are you more comfortable in making:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti19' type="radio" value="-1" onclick="mbtijs19()" required> Penilaian berasaskan logik.<br>
											<i>Logical judgements.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti19' type="radio" value="1" onclick="mbtijs19()" required> Penilaian berasaskan nilai.<br>
											<i>Value judgements.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq20" class="testbox">
								<div>
									<h5 class="text-center">
										<span>20. Adakah anda mahu sesuatu:</span>
										<br>
										<i>20. Do you want things:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti20' type="radio" value="-1" onclick="mbtijs20()" required> Selesai dan dipersetujui.<br>
											<i>Settled and decided.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti20' type="radio" value="1" onclick="mbtijs20()" required> Tidak / belum diselesaikan dan tidak / belum dipersetujui.<br>
											<i>Unsettled and undecided.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq21" class="testbox">
								<div>
									<h5 class="text-center">
										<span>21. Adakah anda akan mengatakan anda lebih:</span>
										<br>
										<i>21. Would you say you are more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti21' type="radio" value="-1" onclick="mbtijs21()" required> Serius dan tegas.<br>
											<i>Serious and determined.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti21' type="radio" value="1" onclick="mbtijs21()" required> Ceria.<br>
											<i>Easy-going.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq22" class="testbox">
								<div>
									<h5 class="text-center">
										<span>22. Semasa menelefon, adakah anda:</span>
										<br>
										<i>22. In phoning do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti22' type="radio" value="-1" onclick="mbtijs22()" required> Jarang persoalkan apa yang dikata.<br>
											<i>Rarely question that it will all be said.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti22' type="radio" value="1" onclick="mbtijs22()" required> Berlatih terlebih dahulu apa yang ingin dikatakan.<br>
											<i>Rehearse what you'll say.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq23" class="testbox">
								<div>
									<h5 class="text-center">
										<span>23. Fakta bagi anda:</span>
										<br>
										<i>23. Facts:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti23' type="radio" value="-1" onclick="mbtijs23()" required> Merupakan bukti / tidak boleh dipertikaikan.<br>
											<i>"Speak for themselves".</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti23' type="radio" value="1" onclick="mbtijs23()" required> Mencerminkan prinsip.<br>
											<i>Illustrate principles.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq24" class="testbox">
								<div>
									<h5 class="text-center">
										<span>24. Adakah orang yang berwawasan:</span>
										<br>
										<i>24. Are visionaries:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti24' type="radio" value="-1" onclick="mbtijs24()" required> Menjengkelkan.<br>
											<i>somewhat annoying.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti24' type="radio" value="1" onclick="mbtijs24()" required> Menarik.<br>
											<i>rather fascinating.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq25" class="testbox">
								<div>
									<h5 class="text-center">
										<span>25. Adakah anda selalu:</span>
										<br>
										<i>25. Are you more often:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti25' type="radio" value="-1" onclick="mbtijs25()" required> tenang dalam menghadapi tekanan.<br>
											<i>a cool-headed person.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti25' type="radio" value="1" onclick="mbtijs25()" required> baik hati dan peramah.<br>
											<i>a warm-hearted person.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq26" class="testbox">
								<div>
									<h5 class="text-center">
										<span>26. Adalah tidak baik untuk:</span>
										<br>
										<i>26. Is it worst to be:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti26' type="radio" value="-1" onclick="mbtijs26()" required> Tidak adil.<br>
											<i>unjust.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti26' type="radio" value="1" onclick="mbtijs26()" required> Tidak berperikemanusiaan / tanpa belas kasihan.<br>
											<i>merciless.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq27" class="testbox">
								<div>
									<h5 class="text-center">
										<span>27. Sepatutnya, sesuatu peristiwa yang berlaku mestilah:</span>
										<br>
										<i>27. Should one usually let events occur:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti27' type="radio" value="-1" onclick="mbtijs27()" required> Secara pemilihan dan pilihan yang teliti.<br>
											<i>by careful selection and choice.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti27' type="radio" value="1" onclick="mbtijs27()" required> Secara rawak dan nasib.<br>
											<i>randomly and by chance.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq28" class="testbox">
								<div>
									<h5 class="text-center">
										<span>28. Adakah anda berasa lebih baik apabila:</span>
										<br>
										<i>28. Do you feel better about:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti28' type="radio" value="-1" onclick="mbtijs28()" required> Setelah membeli.<br>
											<i>having purchased.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti28' type="radio" value="1" onclick="mbtijs28()" required> Mempunyai pilihan untuk membeli.<br>
											<i>having the option to buy.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq29" class="testbox">
								<div>
									<h5 class="text-center">
										<span>29. Semasa berada dengan rakan-rakan, adakah anda:</span>
										<br>
										<i>29. In company do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti29' type="radio" value="-1" onclick="mbtijs29()" required> Mengambil inisiatif untuk berkomunikasi.<br>
											<i>initiate conversation.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti29' type="radio" value="1" onclick="mbtijs29()" required> Menunggu orang lain untuk menegur / memulakan perbualan bersama anda.<br>
											<i>wait to be approached.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq30" class="testbox">
								<div>
									<h5 class="text-center">
										<span>30. Common sense adalah:</span>
										<br>
										<i>30. Common sense is:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti30' type="radio" value="-1" onclick="mbtijs30()" required> Jarang dipertikaikan.<br>
											<i>rarely questionable.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti30' type="radio" value="1" onclick="mbtijs30()" required> Selalu dipertikaikan.<br>
											<i>frequently questionable.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq31" class="testbox">
								<div>
									<h5 class="text-center">
										<span>31. Kanak-kanak selalunya tidak:</span>
										<br>
										<i>31. Children often do not:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti31' type="radio" value="-1" onclick="mbtijs31()" required> Membuatkan diri mereka berguna / bermanfaat secukupnya.<br>
											<i>make themselves useful enough.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti31' type="radio" value="1" onclick="mbtijs31()" required> Berlatih mengenai fantasi mereka secukupnya.<br>
											<i>exercise their fantasy enough.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq32" class="testbox">
								<div>
									<h5 class="text-center">
										<span>32. Dalam membuat keputusan, adakah anda berasa lebih selesa dengan:</span>
										<br>
										<i>32. In making decisions do you feel more comfortable with:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti32' type="radio" value="-1" onclick="mbtijs32()" required> Standard.<br>
											<i>standards.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti32' type="radio" value="1" onclick="mbtijs32()" required> Perasaan.<br>
											<i>feelings.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq33" class="testbox">
								<div>
									<h5 class="text-center">
										<span>33. Adakah anda lebih:</span>
										<br>
										<i>33. Are you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti33' type="radio" value="-1" onclick="mbtijs33()" required> Tegas berbanding lemah lembut.<br>
											<i>firm than gentle.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti33' type="radio" value="1" onclick="mbtijs33()" required> Lemah lembut berbanding tegas.<br>
											<i>gentle than firm.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq34" class="testbox">
								<div>
									<h5 class="text-center">
										<span>34. Manakah yang lebih dikagumi:</span>
										<br>
										<i>34. Which is more admirable:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti34' type="radio" value="-1" onclick="mbtijs34()" required> Keupayaan untuk mengorganisasi dan menjadi teratur.<br>
											<i>the ability to organize and be methodical.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti34' type="radio" value="1" onclick="mbtijs34()" required> Keupayaan untuk beradaptasi dan melakukan sesuatu dengan apa yang ada.<br>
											<i>the ability to adapt and make do.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq35" class="testbox">
								<div>
									<h5 class="text-center">
										<span>35. Adakah anda lebih menekankan:</span>
										<br>
										<i>35. Do you put more value on:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti35' type="radio" value="-1" onclick="mbtijs35()" required> Infinite.<br>
											<i>infinite.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti35' type="radio" value="1" onclick="mbtijs35()" required> Pemikiran terbuka.<br>
											<i>open-minded.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq36" class="testbox">
								<div>
									<h5 class="text-center">
										<span>36. Adakah interaksi baharu dan tidak rutin bersama individu lain:</span>
										<br>
										<i>36. Does new and non-routine interaction with others:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti36' type="radio" value="-1" onclick="mbtijs36()" required> Memberi rangsangan dan membuatkan anda lebih bertenaga / bersemangat.<br>
											<i>stimulate and energize you.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti36' type="radio" value="1" onclick="mbtijs36()" required> Tidak bertenaga / bersemangat.<br>
											<i>tax your reserves.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq37" class="testbox">
								<div>
									<h5 class="text-center">
										<span>37. Anda selalunya:</span>
										<br>
										<i>37. Are you more frequently:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti37' type="radio" value="-1" onclick="mbtijs37()" required> Bersifat praktikal.<br>
											<i>a practical sort of person.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti37' type="radio" value="1" onclick="mbtijs37()" required> Bersifat khayalan / imaginasi.<br>
											<i>a fanciful sort of person.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq38" class="testbox">
								<div>
									<h5 class="text-center">
										<span>38. Anda lebih cenderung untuk:</span>
										<br>
										<i>38. Are you more likely to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti38' type="radio" value="-1" onclick="mbtijs38()" required> Melihat bagaimana individu lain berguna.<br>
											<i>see how others are useful.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti38' type="radio" value="1" onclick="mbtijs38()" required> Melihat bagaimana orang lain melihat.<br>
											<i>see how others see.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq39" class="testbox">
								<div>
									<h5 class="text-center">
										<span>39. Manakah yang lebih memberi kepuasan:</span>
										<br>
										<i>39. Which is more satisfying:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti39' type="radio" value="-1" onclick="mbtijs39()" required> Membincangkan isu dengan mendalam.<br>
											<i>to discuss an issue thoroughly.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti39' type="radio" value="1" onclick="mbtijs39()" required> Mencapai persetujuan terhadap isu.<br>
											<i>to arrive at agreement on an issue.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq40" class="testbox">
								<div>
									<h5 class="text-center">
										<span>40. Manakah yang lebih mempengaruhi anda:</span>
										<br>
										<i>40. Which rules you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti40' type="radio" value="-1" onclick="mbtijs40()" required> Akal.<br>
											<i>your head.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti40' type="radio" value="1" onclick="mbtijs40()" required> Hati / perasaan.<br>
											<i>your heart.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq41" class="testbox">
								<div>
									<h5 class="text-center">
										<span>41. Adakah anda lebih selesa dengan pekerjaan yang:</span>
										<br>
										<i>41. Are you more comfortable with work that is:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti41' type="radio" value="-1" onclick="mbtijs41()" required> Diberikan secara kontrak.<br>
											<i>contracted.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti41' type="radio" value="1" onclick="mbtijs41()" required> Dijalankan secara tidak tetap / sambilan.<br>
											<i>done on a casual basis.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq42" class="testbox">
								<div>
									<h5 class="text-center">
										<span>42. Adakah anda cenderung untuk mencari:</span>
										<br>
										<i>42. Do you tend to look for:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti42' type="radio" value="-1" onclick="mbtijs42()" required> Perkara yang teratur.<br>
											<i>the orderly.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti42' type="radio" value="1" onclick="mbtijs42()" required> Apa sahaja yang timbul.<br>
											<i>whatever turns up.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq43" class="testbox">
								<div>
									<h5 class="text-center">
										<span>43. Adakah anda lebih suka:</span>
										<br>
										<i>43. Do you prefer:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti43' type="radio" value="-1" onclick="mbtijs43()" required> Ramai rakan dengan perhubungan yang sekejap.<br>
											<i>many friends with brief contact.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti43' type="radio" value="1" onclick="mbtijs43()" required> Beberapa orang rakan dengan perhubungan yang lebih panjang.<br>
											<i>a few friends with more lengthy contact.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq44" class="testbox">
								<div>
									<h5 class="text-center">
										<span>A44. dakah anda lebih berpegang pada:</span>
										<br>
										<i>44. Do you go more by:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti44' type="radio" value="-1" onclick="mbtijs44()" required> Fakta.<br>
											<i>facts.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti44' type="radio" value="1" onclick="mbtijs44()" required> Prinsip.<br>
											<i>principles.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq45" class="testbox">
								<div>
									<h5 class="text-center">
										<span>45. Adakah anda lebih berminat dengan:</span>
										<br>
										<i>45. Are you more interested in:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti45' type="radio" value="-1" onclick="mbtijs45()" required> Pengeluaran dan pengagihan.<br>
											<i>production and distribution.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti45' type="radio" value="1" onclick="mbtijs45()" required> Rekabentuk dan penyelidikan.<br>
											<i>design and research.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq46" class="testbox">
								<div>
									<h5 class="text-center">
										<span>46. Manakah yang lebih mencerminkan pujian bagi anda:</span>
										<br>
										<i>46. Which is more of a compliment:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti46' type="radio" value="-1" onclick="mbtijs46()" required> Terdapat seorang yang bersifat logik.<br>
											<i>"There is a very logical person".</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti46' type="radio" value="1" onclick="mbtijs46()" required> Terdapat seorang yang bersifat sentimental.<br>
											<i>"There is a very sentimental person".</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq47" class="testbox">
								<div>
									<h5 class="text-center">
										<span>47. Adakah anda menghargai diri anda lebih daripada bersifat:</span>
										<br>
										<i>47. Do you value yourself more that you are:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti47' type="radio" value="-1" onclick="mbtijs47()" required> Tidak berbelah bahagi.<br>
											<i>unwavering.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti47' type="radio" value="1" onclick="mbtijs47()" required> Setia.<br>
											<i>devoted.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq48" class="testbox">
								<div>
									<h5 class="text-center">
										<span>48. Adakah anda lebih menyukai:</span>
										<br>
										<i>48. Do you more often prefer the:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti48' type="radio" value="-1" onclick="mbtijs48()" required> Kenyataan yang akhir dan tidak boleh diubah.<br>
											<i>final and unalterable statement.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti48' type="radio" value="1" onclick="mbtijs48()" required> Kenyataan awal dan tentatif.<br>
											<i>tentative and preliminary statement.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq49" class="testbox">
								<div>
									<h5 class="text-center">
										<span>49. Adakah anda lebih selesa:</span>
										<br>
										<i>49. Are you more comfortable:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti49' type="radio" value="-1" onclick="mbtijs49()" required> Selepas keputusan dibuat.<br>
											<i>after a decision.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti49' type="radio" value="1" onclick="mbtijs49()" required> Sebelum keputusan dibuat.<br>
											<i>before a decision.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq50" class="testbox">
								<div>
									<h5 class="text-center">
										<span>50. Adakah anda:</span>
										<br>
										<i>50. Do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti50' type="radio" value="-1" onclick="mbtijs50()" required> Mudah bergaul panjang dengan orang yang tidak dikenali.<br>
											<i>speak easily and at length with strangers.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti50' type="radio" value="1" onclick="mbtijs50()" required> Tidak banyak yang boleh dituturkan terhadap orang yang tidak dikenali.<br>
											<i>find little to say to strangers.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq51" class="testbox">
								<div>
									<h5 class="text-center">
										<span>51. Adakah anda lebih cenderung untuk percaya kepada:</span>
										<br>
										<i>51. Are you more likely to trust your:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti51' type="radio" value="-1" onclick="mbtijs51()" required> Pengalaman anda.<br>
											<i>experience.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti51' type="radio" value="1" onclick="mbtijs51()" required> Penekaan / firasat anda.<br>
											<i>hunch.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq52" class="testbox">
								<div>
									<h5 class="text-center">
										<span>52. Adakah anda berasa:</span>
										<br>
										<i>52. Do you feel:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti52' type="radio" value="-1" onclick="mbtijs52()" required> Lebih praktikal berbanding bijaksana.<br>
											<i>more practical than ingenious.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti52' type="radio" value="1" onclick="mbtijs52()" required> Lebih bijaksana berbanding praktikal.<br>
											<i>more ingenious than practical.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq53" class="testbox">
								<div>
									<h5 class="text-center">
										<span>53. Sifat individu yang manakah lebih sesuai dipuji:</span>
										<br>
										<i>53. Which person is more to be complimented - one of:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti53' type="radio" value="-1" onclick="mbtijs53()" required> Alasan yang kukuh.<br>
											<i>clear reason.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti53' type="radio" value="1" onclick="mbtijs53()" required> Perasaan yang kuat.<br>
											<i>strong feeling.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq54" class="testbox">
								<div>
									<h5 class="text-center">
										<span>54. Adakah anda lebih cenderung untuk menjadi:</span>
										<br>
										<i>54. Are you inclined more to be:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti54' type="radio" value="-1" onclick="mbtijs54()" required> Adil dalam melakukan penilaian dan keputusan.<br>
											<i>fair-minded.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti54' type="radio" value="1" onclick="mbtijs54()" required> Simpati.<br>
											<i>sympathetic.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq55" class="testbox">
								<div>
									<h5 class="text-center">
										<span>55. Adakah lebih baik untuk:</span>
										<br>
										<i>55. Is it preferable mostly to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti55' type="radio" value="-1" onclick="mbtijs55()" required> Memastikan sesuatu adalah teratur.<br>
											<i>make sure things are arranged.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti55' type="radio" value="1" onclick="mbtijs55()" required> Hanya membiarkan perkara berlaku.<br>
											<i>just let things happen.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq56" class="testbox">
								<div>
									<h5 class="text-center">
										<span>56. Di dalam hubungan, adakah majoriti perkara:</span>
										<br>
										<i>56. In relationship should most things be:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti56' type="radio" value="-1" onclick="mbtijs56()" required> Boleh dibincangkan semula.<br>
											<i>re-negotiable.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti56' type="radio" value="1" onclick="mbtijs56()" required> Rawak dan bergantung pada keadaan.<br>
											<i>random and circumstantial.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq57" class="testbox">
								<div>
									<h5 class="text-center">
										<span>57. Apabila telefon anda berbunyi, adakah anda:</span>
										<br>
										<i>57. When the phone rings do you:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti57' type="radio" value="-1" onclick="mbtijs57()" required> Tergesa-gesa untuk menjadi orang yang terlebih dahulu menjawab panggilan.<br>
											<i>hasten to get it first.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti57' type="radio" value="1" onclick="mbtijs57()" required> Berharap orang lain akan menjawab panggilan.<br>
											<i>hope someone else will answer.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq58" class="testbox">
								<div>
									<h5 class="text-center">
										<span>58. Adakah anda lebih menghargai:</span>
										<br>
										<i>58. Do you prize more in yourself:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti58' type="radio" value="-1" onclick="mbtijs58()" required> Pemikiran realistik pada diri anda.<br>
											<i>a strong sense of reality.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti58' type="radio" value="1" onclick="mbtijs58()" required> Imaginasi yang kuat pada diri anda.<br>
											<i>a vivid imagination.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq59" class="testbox">
								<div>
									<h5 class="text-center">
										<span>59. Adakah anda lebih tertarik kepada:</span>
										<br>
										<i>59. Are you drawn more to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti59' type="radio" value="-1" onclick="mbtijs59()" required> Asas.<br>
											<i>fundamentals.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti59' type="radio" value="1" onclick="mbtijs59()" required> Lebih mendalam.<br>
											<i>overtones.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq60" class="testbox">
								<div>
									<h5 class="text-center">
										<span>60. Manakah kesilapan yang lebih besar:</span>
										<br>
										<i>60. Which seems the greater error:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti60' type="radio" value="-1" onclick="mbtijs60()" required> Menjadi terlalu ghairah.<br>
											<i>to be too passionate.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti60' type="radio" value="1" onclick="mbtijs60()" required> Menjadi terlalu objektif.<br>
											<i>to be too objective.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq61" class="testbox">
								<div>
									<h5 class="text-center">
										<span>61. Secara amnya, adakah anda memandang diri anda:</span>
										<br>
										<i>61. Do you see yourself as basically:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti61' type="radio" value="-1" onclick="mbtijs61()" required> Degil.<br>
											<i>hard-headed.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti61' type="radio" value="1" onclick="mbtijs61()" required> Lembut hati.<br>
											<i>soft-hearted.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq62" class="testbox">
								<div>
									<h5 class="text-center">
										<span>62. Situasi manakah lebih menarik perhatian anda:</span>
										<br>
										<i>62. Which situation appeals to you more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti62' type="radio" value="-1" onclick="mbtijs62()" required> Berstruktur dan berjadual.<br>
											<i>the structured and scheduled.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti62' type="radio" value="1" onclick="mbtijs62()" required> Tidak berstruktur dan berjadual.<br>
											<i>the unstructured and unscheduled.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq63" class="testbox">
								<div>
									<h5 class="text-center">
										<span>63. Adakah anda seseorang yang lebih:</span>
										<br>
										<i>63. Are you a person that is more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti63' type="radio" value="-1" onclick="mbtijs63()" required> Bersifat rutin berbanding fleksibel.<br>
											<i>routinized than whimsical.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti63' type="radio" value="1" onclick="mbtijs63()" required> Bersifat fleksibel berbanding rutin.<br>
											<i>whimsical than routinized.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq64" class="testbox">
								<div>
									<h5 class="text-center">
										<span>64. Adakah anda cenderung untuk:</span>
										<br>
										<i>64. Are you more inclined to be:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti64' type="radio" value="-1" onclick="mbtijs64()" required> Mudah untuk didekati.<br>
											<i>easy to approach.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti64' type="radio" value="1" onclick="mbtijs64()" required> Sukar didekati.<br>
											<i>somewhat reserved.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq65" class="testbox">
								<div>
									<h5 class="text-center">
										<span>65. Dalam penulisan, anda lebih menyukai:</span>
										<br>
										<i>65. In writings do you prefer:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti65' type="radio" value="-1" onclick="mbtijs65()" required> Literal (menulis perkataan asal / sebenar dari teks sebenar).<br>
											<i>the more literal.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti65' type="radio" value="1" onclick="mbtijs65()" required> Figurative (Kiasan / Metafora).<br>
											<i>the more figurative.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq66" class="testbox">
								<div>
									<h5 class="text-center">
										<span>66. Adakah lebih sukar untuk anda:</span>
										<br>
										<i>66. Is it harder for you to:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti66' type="radio" value="-1" onclick="mbtijs66()" required> Bersetuju dengan orang lain.<br>
											<i>identify with others.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti66' type="radio" value="1" onclick="mbtijs66()" required> Menggunakan orang lain.<br>
											<i>utilize others.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq67" class="testbox">
								<div>
									<h5 class="text-center">
										<span>67. Manakah yang anda lebih mahukan:</span>
										<br>
										<i>67. Which do you wish more for yourself:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti67' type="radio" value="-1" onclick="mbtijs67()" required> Alasan yang jelas.<br>
											<i>clarity of reason.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti67' type="radio" value="1" onclick="mbtijs67()" required> Sangat bersimpati dan belas kasihan terhadap penderitaan orang lain.<br>
											<i>strength of compassion.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq68" class="testbox">
								<div>
									<h5 class="text-center">
										<span>68. Manakah kesalahan yang lebih besar:</span>
										<br>
										<i>68. Which is the greater fault:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti68' type="radio" value="-1" onclick="mbtijs68()" required> Bersifat cuai.<br>
											<i>being indiscriminate.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti68' type="radio" value="1" onclick="mbtijs68()" required> Bersifat kritikal.<br>
											<i>being critical.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq69" class="testbox">
								<div>
									<h5 class="text-center">
										<span>69. Anda lebih menyukai:</span>
										<br>
										<i>69. Do you prefer the:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti69' type="radio" value="-1" onclick="mbtijs69()" required> Sesuatu yang telah dirancang.<br>
											<i>planned event.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti69' type="radio" value="1" onclick="mbtijs69()" required> Sesuatu yang tidak dirancang.<br>
											<i>unplanned event.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtiq70" class="testbox">
								<div>
									<h5 class="text-center">
										<span>70. Anda cenderung untuk menjadi lebih:</span>
										<br>
										<i>70. Do you tend to be more:</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti70' type="radio" value="-1" onclick="mbtijs70()" required> Melakukan sesuatu dengan niat berbanding secara spontan.<br>
											<i>deliberate than spontaneous.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qmbti70' type="radio" value="1" onclick="mbtijs70()" required> Spontan berbanding melakukan sesuatu dengan niat.<br>
											<i>spontaneous than deliberate.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="mbtians">
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