<?php 
// ****************************************************************************
// 
// ZZJ Audit Tool v1.0
// Copyright (C) 2010  ZigZagJoe (zigzagjoe@gmail.com)
// 
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
// 
// ****************************************************************************

// corporate memberlist.


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class eveApiMembers extends eveApi {
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 public $entries;
  
 public function fetch($chid,$usid,$apik, $extended = false) {
  $args = array("characterID"=>$chid,"keyID"=>$usid,"vCode"=>$apik);
	if ($extended)
		$args["extended"] = "1";
		
  return $this->fetch_xml("/corp/MemberTracking.xml.aspx",$args);
 }

 public function loadAPI() {
  $this->entries = $this->api->result->rowset->row;

  return true;
 }
}
  
 ?>