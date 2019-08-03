<?php
class Pagination{
  var $result;
  var $anchors;
  function Pagination($conn,$sql,$starting,$recpage,$hal,$sort)
  {
		//-------------------------------------------------------------------
		$rst			= $conn->query($sql) or die ("query gagal dijalankan: ".$mysqli->error);
		$numrows		= $rst->num_rows;
		$sql		 	.=	" limit $starting, $recpage";
		$this->result	= $conn->query($sql) or die ("query gagal dijalankan: ".$mysqli->error);
		//--------------------------------------------------------------------
		$total_page		=	ceil($numrows/$recpage);

		if ($sort){
			$anc = "<ul class='pagination justify-content-center mb-4'>";
			if($hal > 1){
				$prev=$hal-1;
				$anc .= "<li class='page-item'><a class='page-link' href='$_SERVER[PHP_SELF]?page=$prev'>&larr; Previous</a></li>";
			}
			else{
				$anc .= "<li class='page-item disabled'><a class='page-link' href='#'>&larr; Previous</li></a>";
			}

			if($hal < $total_page){
				$next=$hal+1;
				$anc .= "<li class='page-item'><a class='page-link' href='$_SERVER[PHP_SELF]?page=$next'>Next &rarr;</a></li>";
			}
			else{
				$anc .= "<li class='page-item disabled'><a class='page-link' href='#'>Next &rarr;</li></a>";
			}
			$anc .= "</ul>";
		}else{
			$anc = "<ul class='pagination justify-content-center mb-4'>";
			if($hal < $total_page){
				$prev=$hal+1;
				$anc .= "<li class='page-item'><a class='page-link' href='$_SERVER[PHP_SELF]?page=$prev'>&larr; Previous</a></li>";
			}
			else{
				$anc .= "<li class='page-item disabled'><a class='page-link' href='#'>&larr; Previous</li></a>";
			}

			if($hal > 1){
				$next=$hal-1;
				$anc .= "<li class='page-item'><a class='page-link' href='$_SERVER[PHP_SELF]?page=$next'>Next &rarr;</a></li>";
			}
			else{
				$anc .= "<li class='page-item disabled'><a class='page-link' href='#'>Next &rarr;</li></a>";
			}
			$anc .= "</ul>";
		}
		$this->anchors = $anc;
	}

}
?>
