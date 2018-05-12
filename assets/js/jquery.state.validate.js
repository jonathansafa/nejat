function validateState(el) {
    //put all states in this array. 
    var states =["AK","AL","AR","AS","AZ","CA","CO","CT","DC","DE","FL","GA","GU","HI","IA","ID",
 "IL","IN","KS","KY","LA","MA","MD","ME","MH","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY",
 "OH","OK","OR","PA","PR","PW","RI","SC","SD","TN","TX","UT","VA","VI","VT","WA","WI","WV","WY"];
    for(var i=0;i< states.length;i++) {
      if(el.value.toUpperCase() == states[i]) {
        return true;
      }
    }
    //clear element if it doesn't match a state
    el.value = ""; //you could maybe do something else here.
    return false;
}
