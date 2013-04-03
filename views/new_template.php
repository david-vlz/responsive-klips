<h4>Neues Template</h4>
<? foreach($this->subjects as $department) {?>
	<p><?= $department->name?></p>
			<? foreach($department->institutes as $guide) {?>
				<p style="margin-left:30px"><?= $guide->name?></p>
							<? foreach($guide->courses as $course) {?>
								<p style="margin-left:50px"><?= $course->titel?></p>
							<?}?>
			<?}?>
	<br/><br/>
<?}?>

