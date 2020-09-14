<?php
	$rows = array();
	$rows_multi = array();
	$qry = "select a.*, b.uitype
	FROM {$this->db->dbprefix}performance_template_section_column a
	LEFT JOIN {$this->db->dbprefix}performance_template_section_column_uitype b on b.uitype_id = a.uitype_id
	WHERE a.deleted = 0 AND a.template_section_id = {$section_id}
	ORDER BY a.sequence";
	$columns = $db->query( $qry );
	$first = true;
	foreach( $columns->result() as $row ) :
		if( $row->uitype_id == 4 )
		{
			//get items
			$where = array(
				'section_column_id' => $row->section_column_id
			);
			
			$items = $this->db->get_where('performance_template_section_column_item', $where);
			foreach( $items->result() as $item )
			{
				//check if has children
				$item->column_id = $row->section_column_id;
				$item->children = array();
				$children = $this->db->get_where('performance_template_section_column_item', array('parent_id' => $item->item_id));
				if( $children->num_rows() > 0 )
				{
					$item->children = $children->result();
				}

				$rows[] = $item;
			}
			
			$first = false;
		}

		if( !$first )
		{
			break;
		}
	endforeach;
	
	//build each parent row first then subrows
	foreach( $rows as $row )
	{
		$size = sizeof( $row->children );
		echo '<tr>';
		foreach( $columns->result() as $col )
		{
			switch( $col->uitype_id )
			{
				case 3: 
					if( $size > 0 )
					{
						$child = $row->children[0];
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $child->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						} ?>
						<td>
							<textarea class="form-control" rows="1" name="appraisal_field[<?php echo $col->section_column_id?>][<?php echo $child->item_id?>]"><?php echo $value?></textarea>
						</td>
						<?php
					}
					else{
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $row->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						} ?>
						<td>
							<textarea class="form-control" rows="1" name="appraisal_field[<?php echo $col->section_column_id?>][<?php echo $row->item_id?>]"><?php echo $value?></textarea>
						</td><?php
					}
					break;
				case 4:
					if( $row->column_id == $col->section_column_id )
					{ ?>
						<td rowspan="<?php echo ($size > 0 ? $size : 1) ?>">
							<textarea class="form-control" rows="4" name="item[<?php echo $row->item_id?>]" readonly><?php echo $row->item?></textarea>
						</td> <?
					}
					else{
						//children
						if( $size > 0 )
						{
							$child = $row->children[0];  ?>
							<td>
								<textarea class="form-control" rows="1" name="item[<?php echo $child->item_id?>]"  readonly><?php echo $child->item?></textarea>
							</td> <?
						}
						else{ ?>
							<td></td><?php
						}
					}
					break;
				case 5:
					$value = "";
					if( $size > 0 )
					{
						$child = $row->children[0];
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $child->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}
					}
					else{
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $row->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}
					}

					$ratings = $this->db->get_where('performance_setup_rating_score', array('status_id' => 1, 'rating_group_id' => $col->rating_group_id));
					$options = array();
					$options[] = '<option value="" score="0">Select...</option>';
					foreach( $ratings->result() as $rating )
					{
						$options[] = '<option value="'.$rating->rating_score_id.'" score="'.$rating->rating_score.'" '.($value == $rating->rating_score_id ? 'selected="selected"' : '').'>'. $rating->score .'</option>';
					}

					if( $size > 0 )
					{
						echo '<td><select name="appraisal_field['.$col->section_column_id.']['.$child->item_id.']" class="rating-field">';
					}
					else{
						echo '<td><select name="appraisal_field['.$col->section_column_id.']['.$row->item_id.']" class="rating-field">';	
					}
					echo implode('', $options);
					echo '</select></td>';
					break;
				case 6:
					if( $size > 0 )
					{
						$child = $row->children[0];
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $child->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}
						echo '<td><input type="text" class="form-control" name="field['.$col->section_column_id.']['.$child->item_id.']" value="'.$value.'"></td>';
					}
					else{
						$where = array(
							'appraisal_id' => $appraisal_id,
							'user_id' => $user_id,
							'item_id' => $row->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_appraisal_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}

						echo '<td><input type="text" class="form-control" name="field['.$col->section_column_id.']['.$row->item_id.']" value="'.$value.'"></td>';
					}
					break;
				case 7: //weight
					if( $size > 0 )
					{
						$child = $row->children[0];
						$where = array(
							'item_id' => $child->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_template_section_column_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}
						echo '<td><input type="text" class="form-control weight-field" name="field['.$col->section_column_id.']['.$child->item_id.']" value="'.$value.'" readonly></td>';
					}
					else{
						$where = array(
							'item_id' => $row->item_id,
							'section_column_id' => $col->section_column_id
						);
						$checked = $this->db->get_where('performance_template_section_column_fields', $where);
						$value = "";
						if($checked->num_rows() > 0)
						{
							$value = $checked->row()->value;
						}

						echo '<td><input type="text" class="form-control weight-field" name="field['.$col->section_column_id.']['.$row->item_id.']" value="'.$value.'" readonly></td>';
					}
					break;
				default:
					echo '<td></td>';
			}
		}
		echo '</tr>';	
		if( $size > 0 )
		{
			for($i=1;$i<$size;$i++)
			{
				echo '<tr>';
				$child = $row->children[$i];
				foreach( $columns->result() as $col ){
					switch( $col->uitype_id )
					{
						case 3: //textarea
							$where = array(
								'appraisal_id' => $appraisal_id,
								'user_id' => $user_id,
								'item_id' => $child->item_id,
								'section_column_id' => $col->section_column_id
							);
							$checked = $this->db->get_where('performance_appraisal_fields', $where);
							$value = "";
							if($checked->num_rows() > 0)
							{
								$value = $checked->row()->value;
							} ?>
							<td>
								<textarea class="form-control" rows="1" name="appraisal_field[<?php echo $col->section_column_id?>][<?php echo $child->item_id?>]"><?php echo $value?></textarea>
							</td> <?php
							break;
						case 4:
							if( $row->column_id != $col->section_column_id )
							{ ?>
								<td>
									<textarea class="form-control" rows="1" name="item[<?php echo $child->item_id?>]" readonly><?php echo $child->item?></textarea>
								</td> <?php
							}
							break;
						case 5:
							$value = "";
							$where = array(
								'appraisal_id' => $appraisal_id,
								'user_id' => $user_id,
								'item_id' => $child->item_id,
								'section_column_id' => $col->section_column_id
							);
							$checked = $this->db->get_where('performance_appraisal_fields', $where);
							if($checked->num_rows() > 0)
							{
								$value = $checked->row()->value;
							}
							$ratings = $this->db->get_where('performance_setup_rating_score', array('status_id' => 1, 'rating_group_id' => $col->rating_group_id));
							$options = array();
							$options[] = '<option value="" score="0">Select...</option>';
							foreach( $ratings->result() as $rating )
							{
								$options[] = '<option value="'.$rating->rating_score_id.'" score="'.$rating->rating_score.'" '.($value == $rating->rating_score_id ? 'selected="selected"' : '').'>'. $rating->score .'</option>';
							}

							echo '<td><select name="appraisal_field['.$col->section_column_id.']['.$child->item_id.']" class="rating-field">';
							echo implode('', $options);
							echo '</select></td>';
							break;
						case 6:
							$where = array(
								'appraisal_id' => $appraisal_id,
								'user_id' => $user_id,
								'item_id' => $child->item_id,
								'section_column_id' => $col->section_column_id
							);
							$checked = $this->db->get_where('performance_appraisal_fields', $where);
							$value = "";
							if($checked->num_rows() > 0)
							{
								$value = $checked->row()->value;
							}
							echo '<td><input type="text" class="form-control" name="field['.$col->section_column_id.']['.$child->item_id.']" value="'.$value.'"></td>';	
							break;
						case 7:
							$where = array(
								'planning_id' => $planning_id,
								'user_id' => $user_id,
								'item_id' => $child->item_id,
								'section_column_id' => $col->section_column_id
							);
							$checked = $this->db->get_where('performance_planning_applicable_fields', $where);
							$value = "";
							if($checked->num_rows() > 0)
							{
								$value = $checked->row()->value;
							}
							echo '<td><input type="text" class="form-control weight-field" name="field['.$col->section_column_id.']['.$child->item_id.']" value="'.$value.'" readonly></td>';
							break;
						default:
							echo '<td></td>';
					}
				}
				echo '</tr>';
			}	
		}
	}		