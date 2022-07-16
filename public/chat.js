const reader = new FileReader();
var isLoading = false
Pusher.logToConsole = true;
var pusher = new Pusher('433abd34166e2985ae62', {
    cluster: 'mt1'
});
var channel = pusher.subscribe('chat-channel');
channel.bind('chat-event', function (data) {
    alterLoading();
    let class_name = "received";
    if (data.from_user == current_user_id) {
        class_name = "sent"
    }
    let message_container = document.getElementById('message_container');
    let file_content
    if (file && isFileImage(file)) {
        file_content = `<img class="message-img" src="/uploaded/${data.file}" style="border: none;height: 140px;width: 109px;border-radius: 0px;">`
    } else {
        file_content = `<div class="bg-gray-200 px-3 py-1 rounded-md shadow-md"><a href="/uploaded/${data.file}">${data.file}</a></div>`
    }

    message_container.innerHTML += `<div class="messages ${class_name}"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"><span>${data.message}</span>${file_content}</div>`;
    console.log(message_container)
    message_container.scrollTop = message_container.scrollHeight;
});
document.getElementById('message').addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        sendMessage()
    }
});
function sendMessage() {
    var message_input = document.getElementById('message');
    document.getElementById('file-container').style.display = "none";
    let data = new FormData();
    fileUploader = document.getElementById('file-uploader');
    file = fileUploader.files[0];
    data.append('message', message_input.value);
    data.append('to_user', document.getElementById('to_user').value);
    data.append('from_user', document.getElementById('from_user').value);
    if (file) {
        data.append('file', file);
        alterLoading();
    }
    if (message_input.value || file) {
        axios.post('/api/send-message', data, {
            headers: {
                "Content-Type": "multipart/form-data",
            }
        })
            .then(response => {
                message_input.value = "";
                fileUploader.value = ""
                console.log(response);
                const res = response.data;

            })
            .catch(error => console.error(error));
    }
}
function setFile(event) {
    const files = event.target.files;
    const file = files[0];
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
function alterLoading() {
    var send_button = document.getElementById("send-button");
    if (!isLoading) {
        send_button.innerHTML = '<img class="animate-spin" src="https://img.icons8.com/fluency/24/000000/loading.png"/>';
    } else {
        send_button.innerText = "Send";

    }
    isLoading = !isLoading;
}
