 private  function ebcdic_decode($ebcdic_hexstring)
  {
    $ebcd_ascii = [];
   
    $ebcd_ascii["nnWWn"] = "00";
    $ebcd_ascii["NnwwN"] = "01";
    $ebcd_ascii["nNwwN"] = "02";
    $ebcd_ascii["NNwwn"] = "03";
    $ebcd_ascii["nnWwN"] = "04";
    $ebcd_ascii["NnWwn"] = "05";
    $ebcd_ascii["nNWwn"] = "06";
    $ebcd_ascii["nnwWN"] = "07";
    $ebcd_ascii["NnwWn"] = "08";
    $ebcd_ascii["nNwWn"] = "09";
    $ebcd_ascii["wnNNw"] = "10";
    $ebcd_ascii["WnnnW"] = "11";
    $ebcd_ascii["wNnnW"] = "12";
    $ebcd_ascii["WNnnw"] = "13";
    $ebcd_ascii["wnNnW"] = "14";
    $ebcd_ascii["WnNnw"] = "15";
    $ebcd_ascii["wNNnw"] = "16";

    $asciiOut = "";
    while (strlen($ebcdic_hexstring) > 1) {
      $thisEbcdic = substr($ebcdic_hexstring, 0, 5);
      //if(!is_null($ebcd_ascii[$thisEbcdic]))
      $asciiOut = $asciiOut . $ebcd_ascii[$thisEbcdic];
      $ebcdic_hexstring = substr($ebcdic_hexstring, 5);
    }

    return $asciiOut;
  }
}
