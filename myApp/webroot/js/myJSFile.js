/**
 * Created by Home on 31-01-18.
 */
function addRecording(e,f){
    var form = document.getElementById('addRecordingForm');
    var id = e.value;
    var title = f.value;

    form.elements.namedItem("mb_recordingid").value = id;
    form.elements.namedItem("label").value = title;

}
