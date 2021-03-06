<image id="indConsumptionByQueueTimeChart" class="chartIndicator" src="<?php echo $chartPath[0] ?>">
<image id="indConsumptionByQueueCountChart" class="chartIndicator" src="<?php echo $chartPath[1] ?>">
<table border="1" id="indConsumptionByQueueTable" class="resultsTable">
	<caption>Heures consommées par queue pour <?php echo $cluster." du ".$monthStart."-".$year.' au '.$monthEnd."-".$yearEnd ?></caption>
	<thead>
		<tr>
			<th rowspan="2">Mois</th>
			<?php foreach(array_keys($results['listQueue']) as $queue){?>
			<th colspan="2"><?php echo $queue ?></th>
			<?php } ?>
		</tr>
		<tr>
			<?php foreach(array_keys($results['listQueue']) as $queue){?>
			<th>Heures CPU</th>
			<th># Jobs</th>
			<?php } ?>
		</tr>		
	</thead>
	<tbody>
	<?php foreach($results['listMonth'] as $month=>$ok){ ?>
		<tr>
			<td><?php echo date("m-y", strtotime($month)); ?></td>
			<?php foreach($results['listQueue'] as $queue=>$resultsByMonth){?>
			<td><?php echo number_format($resultsByMonth[$month]['hours'],2,',',' '); ?></td>
			<td><?php echo number_format($resultsByMonth[$month]['count'],0,',',' '); ?></td>
			<?php } ?>
		</tr>
	<?php } ?>
	</tbody>
</table>