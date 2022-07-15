const reader = new FileReader();
Pusher.logToConsole = true;
var pusher = new Pusher('433abd34166e2985ae62', {
    cluster: 'mt1'
});
var channel = pusher.subscribe('chat-channel');
channel.bind('chat-event', function (data) {
    let class_name = "received";
    if (data.from_user == current_user_id) {
        class_name = "sent"
    }
    console.log(class_name)
    let message_container = document.getElementById('message_container');
    message_container.innerHTML +=
        `<div class="messages ${class_name}"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"><span>${data.message}</span></div>`;
    message_container.scrollTop = message_container.scrollHeight;
});
document.getElementById('message').addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        sendMessage()
    }
});
const fileUploader = document.getElementById('file-uploader');
var uploadedFile;
function sendMessage() {
    var message_input = document.getElementById('message');
    document.getElementById('file-container').style.display = "none";
    if (message_input.value == '') {
        axios.post('/api/send-message', {
            'message': message_input.value,
            'to_user': document.getElementById('to_user').value,
            'from_user': document.getElementById('from_user').value,
            'file': uploadedFile
        }, {
            headers: {
                "Content-Type": "multipart/form-data",
            }
        })
            .then(response => {
                message_input.value = "";
                console.log(response);
                const res = response.data;

            })
            .catch(error => console.error(error));
    }
}
function setFile(event) {
    const files = event.target.files;
    const file = files[0];
    uploadedFile = file
    reader.readAsDataURL(file);
    reader.addEventListener('load', (event) => {
        document.getElementById('file-container').style.display = "block";
        const other_file = document.getElementById('other-file');
        other_file.style.display = "none";
        if (isFileImage(file)) {
            image = document.getElementById('image');
            image.src = event.target.result;
        } else {
            other_file.innerText = file.name;
            other_file.style.display = 'block';
        }
    });
}

function uploadFile() {
    document.getElementById("file-uploader").click();
}
function resetFile(el) {
    el.parentNode.parentNode.style.display = "none";
    console.log(el.previousElementSibling);
}
function isFileImage(file) {
    const acceptedImageTypes = ['image/gif', 'image/webp', 'image/jpg', 'image/jpeg', 'image/png'];
    return file && acceptedImageTypes.includes(file['type'])
}
