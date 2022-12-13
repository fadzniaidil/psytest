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
									<span>Dalam tempoh dua minggu yang lepas, adakah anda terganggu oleh masalah berikut?</span>
									<br>
									<i>Over the past two weeks, have you been bothered by the following problems?</i>
								</strong>
							</h5>
						</div>
						<form action='<?php echo base_url('index.php/'); ?>test/bdiresult' method='POST'>
							<br>
							<div id="bdiq1" class="testbox">
								<div>
									<h5 class="text-center">
										<span>1. Kesedihan</span>
										<br>
										<i>1. Sadness</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi1' type="radio" value="0" onclick="bdijs1()" required> Saya tak rasa sedih.<br>
											<i>I do not feel sad.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi1' type="radio" value="1" onclick="bdijs1()" required>Saya rasa sedih.<br>
											<i>I feel sad much of the time.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi1' type="radio" value="2" onclick="bdijs1()" required>Saya kesedihan sepanjang masa dan sukar meredakannya.<br>
											<i>I am sad all the time.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi1' type="radio" value="3" onclick="bdijs1()" required>Saya sangat sedih atau tak gembira sehingga tak mampu menanggungnya lagi.<br>
											<i>I am so sad or unhappy that I can't stand it.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq2" class="testbox">
								<div>
									<h5 class="text-center">
										<span>2. Pesimis</span>
										<br>
										<i>2. Pessimism</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi2' type="radio" value="0" onclick="bdijs2()" required> Saya tak rasa lemah semangat mengenai masa depan.<br>
											<i>I am not discouraged about my future.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi2' type="radio" value="1" onclick="bdijs2()" required>Saya rasa lemah semangat tentang masa depan.<br>
											<i>I feel more discouraged about my future than I used to be.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi2' type="radio" value="2" onclick="bdijs2()" required>Saya rasa tiada apa yang hendak diharapkan.<br>
											<i>I do not expect things to work out for me.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi2' type="radio" value="3" onclick="bdijs2()" required>Saya rasa masa depan saya mengecewakan dan keadaan takkan bertambah baik.<br>
											<i>I feel my future is hopeless and will only get worse.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq3" class="testbox">
								<div>
									<h5 class="text-center">
										<span>3. Kegagalan Lalu</span>
										<br>
										<i>3. Past Failure</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi3' type="radio" value="0" onclick="bdijs3()" required> Saya tak rasa saya seorang yang gagal.<br>
											<i>I do not feel like a failure.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi3' type="radio" value="1" onclick="bdijs3()" required>Saya rasa saya sudah gagal lebih dari orang biasa.<br>
											<i>I have failed more than I should have.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi3' type="radio" value="2" onclick="bdijs3()" required>Apabila terkenangkan masa lalu, saya hanya nampak kegagalan.<br>
											<i>As I look back, I see a lot of failures.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi3' type="radio" value="3" onclick="bdijs3()" required>Saya rasa saya seorang manusia yang benar-benar gagal.<br>
											<i>I feel I am a total failure as a person.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq4" class="testbox">
								<div>
									<h5 class="text-center">
										<span>4. Hilang Kepuasan</span>
										<br>
										<i>4. Loss of Pleasure</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi4' type="radio" value="0" onclick="bdijs4()" required> Saya dapat kepuasan daripada perkara yang pernah saya lakukan.<br>
											<i>I get as much pleasure as I ever did from the things I enjoy.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi4' type="radio" value="1" onclick="bdijs4()" required>Saya tak seronok seperti dulu.<br>
											<i>I don't enjoy things as much as I used to.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi4' type="radio" value="2" onclick="bdijs4()" required>Saya tak dapat kepuasan sebenar daripada apa sahaja.<br>
											<i>I get very little pleasure from the things I used to enjoy.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi4' type="radio" value="3" onclick="bdijs4()" required>Saya tak puas hati atau bosan dengan segalanya.<br>
											<i>I can't get any pleasure from the things I used to enjoy.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq5" class="testbox">
								<div>
									<h5 class="text-center">
										<span>5. Rasa Bersalah</span>
										<br>
										<i>5. Guilty Feelings</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi5' type="radio" value="0" onclick="bdijs5()" required> Saya tak rasa begitu bersalah.<br>
											<i>I don't feel particularly guilty.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi5' type="radio" value="1" onclick="bdijs5()" required>Saya rasa bersalah sekali-sekala sahaja.<br>
											<i>I feel guilty over many things I have done or should have done.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi5' type="radio" value="2" onclick="bdijs5()" required>Saya rasa agak bersalah hampir setiap masa.<br>
											<i>I feel guilty most of the time.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi5' type="radio" value="3" onclick="bdijs5()" required>Saya rasa bersalah sepanjang masa.<br>
											<i>I feel guilty all of the time.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq6" class="testbox">
								<div>
									<h5 class="text-center">
										<span>6. Rasa Dihukum</span>
										<br>
										<i>6. Punishment Feelings</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi6' type="radio" value="0" onclick="bdijs6()" required> Saya tak rasa saya dihukum.<br>
											<i>I don't feel I am being punished.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi6' type="radio" value="1" onclick="bdijs6()" required>Saya rasa saya mungkin dihukum.<br>
											<i>I feel I may be punished.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi6' type="radio" value="2" onclick="bdijs6()" required>Saya percaya saya akan dihukum.<br>
											<i>I expect to be punished.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi6' type="radio" value="3" onclick="bdijs6()" required>Saya rasa saya sedang dihukum.<br>
											<i>I feel I am being punished. </i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq7" class="testbox">
								<div>
									<h5 class="text-center">
										<span>7. Tidak suka diri sendiri</span>
										<br>
										<i>7. Self-Dislike</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi7' type="radio" value="0" onclick="bdijs7()" required> Saya tak rasa kecewa dengan diri saya.<br>
											<i>I feel the same about myself as ever.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi7' type="radio" value="1" onclick="bdijs7()" required>Saya kecewa dengan diri saya.<br>
											<i>I have lost confidence in myself.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi7' type="radio" value="2" onclick="bdijs7()" required>Saya rasa meluat dengan diri saya.<br>
											<i>I am disappointed in myself.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi7' type="radio" value="3" onclick="bdijs7()" required>Saya benci diri saya.<br>
											<i>I dislike myself. </i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq8" class="testbox">
								<div>
									<h5 class="text-center">
										<span>8. Kritik diri sendiri</span>
										<br>
										<i>8. Self-Criticalness</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi8' type="radio" value="0" onclick="bdijs8()" required> Saya tak rasa saya lebih teruk dari orang lain.<br>
											<i>I don't criticize or blame myself more than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi8' type="radio" value="1" onclick="bdijs8()" required>Saya sentiasa mencari kelemahan dan kesilapan diri sendiri.<br>
											<i>I am more critical of myself than I used to be.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi8' type="radio" value="2" onclick="bdijs8()" required>Saya menyalahkan diri saya setiap kali berlaku kesilapan.<br>
											<i>I criticize myself for all of my faults.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi8' type="radio" value="3" onclick="bdijs8()" required>Saya menyalahkan diri sendiri atas setiap perkara buruk yang berlaku.<br>
											<i>I blame myself for everything bad that happens. </i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq9" class="testbox">
								<div>
									<h5 class="text-center">
										<span>9. Fikir untuk bunuh diri </span>
										<br>
										<i>9. Suicidal Thoughts or Wishes</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi9' type="radio" value="0" onclick="bdijs9()" required> Saya tak terfikir untuk bunuh diri.<br>
											<i>I don't have any thoughts of killing myself.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi9' type="radio" value="1" onclick="bdijs9()" required>Saya ada terfikir untuk bunuh diri, tapi saya tak akan melakukannya.<br>
											<i>I have thoughts of killing myself, but I would not carry them out.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi9' type="radio" value="2" onclick="bdijs9()" required>Saya ingin bunuh diri.<br>
											<i>I would like to kill myself.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi9' type="radio" value="3" onclick="bdijs9()" required>Saya akan bunuh diri jika berpeluang.<br>
											<i>I would kill myself if I had the chance. </i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq10" class="testbox">
								<div>
									<h5 class="text-center">
										<span>10. Menangis </span>
										<br>
										<i>10. Crying</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi10' type="radio" value="0" onclick="bdijs10()" required> Saya tak menangis lagi daripada kebiasaannya.<br>
											<i>I don't cry anymore than I used to.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi10' type="radio" value="1" onclick="bdijs10()" required>Saya kerap menangis sekarang daripada biasa.<br>
											<i>I cry more than I used to.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi10' type="radio" value="2" onclick="bdijs10()" required>Saya kini menangis sepanjang masa.<br>
											<i>I cry over every little thing.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi10' type="radio" value="3" onclick="bdijs10()" required>Saya biasanya menangis, tapi kini saya tak dapat menangis walaupun saya mahu.<br>
											<i>I feel like crying, but I can't.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq11" class="testbox">
								<div>
									<h5 class="text-center">
										<span>11. Sakit hati </span>
										<br>
										<i>11. Agitation</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi11' type="radio" value="0" onclick="bdijs11()" required> Saya tidak lagi sakit hati seperti sebelum ini.<br>
											<i>I am no more restless or wound up than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi11' type="radio" value="1" onclick="bdijs11()" required>Saya lebih mudah meradang atau sakit hati daripada biasa.<br>
											<i>I feel more restless or wound up than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi11' type="radio" value="2" onclick="bdijs11()" required>Saya rasa sakit hati sepanjang masa.<br>
											<i>I am so restless or agitated that it's hard to stay still.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi11' type="radio" value="3" onclick="bdijs11()" required>Saya tak lagi rasa sakit hati dengan perkara yang selalunya menyakitkan hati saya sebelum ini.<br>
											<i>I am so restless or agitated that I have to keep moving or doing something.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq12" class="testbox">
								<div>
									<h5 class="text-center">
										<span>12. Hilang minat</span>
										<br>
										<i>12. Lost of Interest</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi12' type="radio" value="0" onclick="bdijs12()" required> Saya tak hilang minat terhadap orang lain.<br>
											<i>I have not lost interest in other people or activities.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi12' type="radio" value="1" onclick="bdijs12()" required> Saya kurang minat terhadap orang lain berbanding dulu.<br>
											<i>I am less interested in other people or things than before.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi12' type="radio" value="2" onclick="bdijs12()" required> Saya hampir hilang minat terhadap orang lain.<br>
											<i>I have lost most of my interest in other people or things.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi12' type="radio" value="3" onclick="bdijs12()" required> Saya tak berminat langsung dengan orang lain.<br>
											<i>It's hard to get interested in anything.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq13" class="testbox">
								<div>
									<h5 class="text-center">
										<span>13. Sukar buat keputusan</span>
										<br>
										<i>13. Indecisiveness</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi13' type="radio" value="0" onclick="bdijs13()" required> Saya cuba buat keputusan sebaik mungkin.<br>
											<i>I make decisions about as well as ever.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi13' type="radio" value="1" onclick="bdijs13()" required> Saya lebih sering menangguh urusan membuat keputusan.<br>
											<i>I find it more difficult to make decisions than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi13' type="radio" value="2" onclick="bdijs13()" required> Saya sukar buat keputusan berbanding dulu.<br>
											<i>I have much greater difficulty in making decisions than I used to.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi13' type="radio" value="3" onclick="bdijs13()" required> Saya tidak lagi mampu membuat keputusan.<br>
											<i>I have trouble making any decisions.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq14" class="testbox">
								<div>
									<h5 class="text-center">
										<span>14. Tak berguna </span>
										<br>
										<i>14. Worthlessness</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi14' type="radio" value="0" onclick="bdijs14()" required> Saya tak kelihatan teruk berbanding dulu.<br>
											<i>I do not feel I am worthless.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi14' type="radio" value="1" onclick="bdijs14()" required> Saya risau kelihatan tua atau tak menarik.<br>
											<i>I don't consider myself as worthwhile and useful as I used to.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi14' type="radio" value="2" onclick="bdijs14()" required> Saya rasa ada perubahan kekal pada penampilan saya yang membuat saya kelihatan kurang menarik.<br>
											<i>I feel more worthless as compared to other people.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi14' type="radio" value="3" onclick="bdijs14()" required> Saya percaya saya kelihatan hodoh.<br>
											<i>I feel utterly worthless.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq15" class="testbox">
								<div>
									<h5 class="text-center">
										<span>15. Hilang tenaga</span>
										<br>
										<i>15. Loss of Energy</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi15' type="radio" value="0" onclick="bdijs15()" required> Saya boleh bekerja dengan baik seperti biasa.<br>
											<i>I have as much energy as ever.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi15' type="radio" value="1" onclick="bdijs15()" required> Ia mengambil usaha yang lebih untuk memulakan sesuatu kerja.<br>
											<i>I have less energy than I used to have.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi15' type="radio" value="2" onclick="bdijs15()" required> Saya harus memaksa diri saya untuk membuat sesuatu.<br>
											<i>I don't have enough energy to do very much.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi15' type="radio" value="3" onclick="bdijs15()" required> Saya tak boleh langsung membuat apa-apa kerja.<br>
											<i>I don't have enough energy to do anything.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq16" class="testbox">
								<div>
									<h5 class="text-center">
										<span>16. Perubahan tidur</span>
										<br>
										<i>16. Changes in Sleeping Pattern</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi16' type="radio" value="0" onclick="bdijs16()" required> Saya boleh tidur macam biasa.<br>
											<i>I have not experienced any changes in my sleeping pattern.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi16' type="radio" value="1" onclick="bdijs16()" required> Saya tak tidur nyenyak seperti biasa dan sukar untuk tidur semula.<br>
											<i>I sleep somewhat more than / less than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi16' type="radio" value="2" onclick="bdijs16()" required> Saya terjaga 1-2 jam awal daipada biasa dan sukar untuk tidur semula.<br>
											<i>I sleep a lot more than / a lot less than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi16' type="radio" value="3" onclick="bdijs16()" required> Saya bangun awal beberapa jam daripada biasa dan tak boleh tidur semula.<br>
											<i>I sleep most of the day / I wake up 1-2 hours early and can't get back to sleep.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq17" class="testbox">
								<div>
									<h5 class="text-center">
										<span>17. Terganggu</span>
										<br>
										<i>17. Irritability</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi17' type="radio" value="0" onclick="bdijs17()" required> Saya tak rasa letih lebih dari biasa.<br>
											<i>I am no more irritable than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi17' type="radio" value="1" onclick="bdijs17()" required> Saya lebih mudah letih dari biasa.<br>
											<i>I am more irritable than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi17' type="radio" value="2" onclick="bdijs17()" required> Saya letih ketika melakukan apa saja.<br>
											<i>I am much more irritable than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi17' type="radio" value="3" onclick="bdijs17()" required> Saya terlalu letih untuk buat apa sahaja.<br>
											<i>I am irritable all the time.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq18" class="testbox">
								<div>
									<h5 class="text-center">
										<span>18. Perubahan selera</span>
										<br>
										<i>18. Changes in Appetite</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi18' type="radio" value="0" onclick="bdijs18()" required> Selera makan saya tak seteruk dulu.<br>
											<i>I have not experienced any changes in my appetite.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi18' type="radio" value="1" onclick="bdijs18()" required> Selera makan saya tak sebagus seperti selalu.<br>
											<i>My appetite is somewhat less than / greater than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi18' type="radio" value="2" onclick="bdijs18()" required> Selera makan saya makin teruk.<br>
											<i>My appetite is much less than / greater than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi18' type="radio" value="3" onclick="bdijs18()" required> Saya langsung tak ada selera.<br>
											<i>I have no appetite at all / I crave food all the time.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq19" class="testbox">
								<div>
									<h5 class="text-center">
										<span>19. Kesukaran menumpukan perhatian</span>
										<br>
										<i>19. Concentration Difficulty</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi19' type="radio" value="0" onclick="bdijs19()" required> Saya dapat menumpukan perhatian seperti biasa.<br>
											<i>I can concentrate as well as ever.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi19' type="radio" value="1" onclick="bdijs19()" required> Saya tidak dapat menumpukan perhatian seperti biasa.<br>
											<i>I can't concentrate as well as usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi19' type="radio" value="2" onclick="bdijs19()" required> Sukar untuk terus memikirkan apa sahaja untuk masa yang lama.<br>
											<i>It's hard to keep my mind on anything for very long.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi19' type="radio" value="3" onclick="bdijs19()" required> Saya dapati saya tidak dapat menumpukan perhatian pada apa-apa.<br>
											<i>I find I can't concentrate on anything.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq20" class="testbox">
								<div>
									<h5 class="text-center">
										<span>20. Keletihan</span>
										<br>
										<i>20. Tiredness or Fatigue</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi20' type="radio" value="0" onclick="bdijs20()" required> Saya tidak lebih letih atau lelah daripada biasa.<br>
											<i>I am no more tired or fatigued than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi20' type="radio" value="1" onclick="bdijs20()" required> Saya menjadi lebih letih dengan lebih mudah daripada biasa.<br>
											<i>I get more tired or fatigued more easily than usual.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi20' type="radio" value="2" onclick="bdijs20()" required> Saya terlalu letih untuk melakukan banyak perkara yang biasa saya lakukan.<br>
											<i>I am too tired or fatigued to do a lot of the things I used to do.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi20' type="radio" value="3" onclick="bdijs20()" required> Saya terlalu letih untuk melakukan kebanyakan perkara yang biasa saya lakukan.<br>
											<i>I am too tired or fatigued to do most of the things I used to do.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdiq21" class="testbox">
								<div>
									<h5 class="text-center">
										<span>21. Hilang keinginan terhadap aktiviti seksual</span>
										<br>
										<i>21. Loss of Interest in Sex</i>
									</h5>
								</div>
								<br>
								<div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi21' type="radio" value="0" onclick="bdijs21()" required> Saya tidak perasan sebarang perubahan dalam keinginan seksual.<br>
											<i>I have not notice any recent change in my interest in sex.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi21' type="radio" value="1" onclick="bdijs21()" required> Saya kurang keinginan terhadap aktiviti seksual berbanding dengan sebelum ini.<br>
											<i>I am less interested in sex than I used to be.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi21' type="radio" value="2" onclick="bdijs21()" required> Saya kurang keinginan terhadap aktiviti seksual sekarang.<br>
											<i>I am much less interested in sex now.</i>
										</label>
									</div>
									<div class="btn btn-primary btn-block">
										<label class="btn-block">
											<input name='qbdi21' type="radio" value="3" onclick="bdijs21()" required> Saya hilang keinginan aktiviti seksual sepenuhnya.<br>
											<i>I have lost interest in sex completely.</i>
										</label>
									</div>
								</div>
							</div>
							<div id="bdians">
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