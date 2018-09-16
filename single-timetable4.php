<?php
/**
 * The Template for displaying timetable single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

				<?php

				$timetable = get_the_ID();
				$student = get_post_meta($timetable, 'student', true);
				?>
				<div class="entry-content">
				<form method="POST">
					<table class="tablesorter" id="table">
						<thead>
							<tr>
								<th colspan="3"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a></th>
							</tr>
							<tr>
								<th width="100">Дата и время</th>
								<th  width="50">Кабинет</th>
								<th>Тема</th>
							</tr>
						</thead>
						<tbody id = "tbody">
					<?php
					$row_number = 0;
					$date = 'date';
					$time = 'time';
					$cabinet = 'cabinet';
					$subject = 'subject	';
					$tr = 'tr';
					if( have_rows('class') ):
						?>
							<?php while( have_rows('class') ): the_row(); ?>

							<?php
							$row_number += 1;
							$date = 'date' . $row_number;
							$time = 'time' . $row_number;
							$cabinet = 'cabinet' . $row_number;
							$subject = 'subject' . $row_number;
							$tr = 'tr' . $row_number;
							?>
							<tr id="<?php echo $tr ?>">

								<td>
									<input name="<?php echo $date ?>" type="date" value = "<?php the_sub_field('Date'); ?>"/>
									<input name="<?php echo $time ?>" type="time" value = "<?php the_sub_field('time'); ?>"/>
								</td>
								<td><input name="<?php echo $cabinet ?>" type="number" value="<?php the_sub_field('cabinet'); ?>" /></td>
								<td><textarea name="<?php echo $subject ?>"><?php the_sub_field('subject'); ?></textarea></td>
							</tr>
							<?php 
							endwhile; ?>
					<?php endif; ?>
					</tbody>
					<input type="hidden" name="count" value = "<?php echo ($row_number) ?>" id = "count" />
                    </table>
					
				
				<input type='button' value='Добавить поле' onclick='test();'/>
				<hr>
				<input type = 'submit' value='Сохранить' name='save' />
				</div>
				</form>

				<?php
			endwhile;
			// Previous/next post navigation.
			twentyfourteen_post_nav();
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
					<script>
						var counter = <?php echo $row_number ?>;
						var id = 'tr'  + counter;
						counter += 1;
						function test() {
							var element = document.getElementById('tbody');
							var tr = document.createElement('tr');
							tr.id = 'tr' + counter;
							var td1 = document.createElement('td');
							var td2 = document.createElement('td');
							var td3 = document.createElement('td');
							var date = document.createElement('input');
							date.name = 'date' + counter;
							date.type = 'date';
							var time = document.createElement('input');
							time.name = 'time' + counter;
							time.type = 'time';
							var cabinet = document.createElement('input');
							cabinet.name = 'cabinet' + counter;
							cabinet.type = 'number';
							var subject = document.createElement('textarea');
							subject.name = 'subject' + counter;

							var table = document.getElementById('table')
							var count = document.getElementById('count');
							var newCount = document.createElement('input');
							newCount.type = 'hidden';
							newCount.name = 'count';
							newCount.id = 'count';
							newCount.value = counter;

							
							element.insertAdjacentElement('beforeEnd',tr);
							tr.appendChild(td1);
							td1.appendChild(date);
							td1.appendChild(time);
							tr.appendChild(td2);
							td2.appendChild(cabinet);
							tr.appendChild(td3);
							td3.appendChild(subject);
							
							table.replaceChild(newCount, count);
							
							id = 'tr' + counter;
							counter += 1;
						}
					</script>
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

if (isset($_POST["save"])) 
{
	$i = 0;
	while( have_rows('class') ) 
		{	
			$i++;
			the_row();
			
			$row = array(
			'Date'	=> $_POST["date{$i}"],
			'Time' => $_POST["time{$i}"],
			'cabinet'	=> $_POST["cabinet{$i}"],
			'subject'	=> $_POST["subject{$i}"]
			);
			
			update_row('class', $i, $row);
			
		}
	$i += 1;
	for ($i; $i <= $_POST["count"]; $i++) 
	{
		$row = array(
		'Date'	=> $_POST["date{$i}"],
		'Time' => $_POST["time{$i}"],
		'cabinet'	=> $_POST["cabinet{$i}"],
		'subject'	=> $_POST["subject{$i}"]
		);

		$newRow = add_row('class', $row);
	}
	
	echo "<script>window.location.href = window.location.href;</script>";
}