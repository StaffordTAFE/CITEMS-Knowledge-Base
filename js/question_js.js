$(document).ready(function () {
    $.ajax({
        url: "request/question_obj.php",
        type: "GET",
        dataType: "json",
        data: { action: "getQuestions" },
        
        success: function(questions) { 
            console.log(questions);

            if (questions) {
                questions.forEach(function(question) {
                    $("#questions").append(
                        `               
                        <div class="container my-3">
                            <h2>${question.question}</h2>
                            <table class="table table-dark border text-light" style="text-align: left;">
                                <tbody>
                                    <tr>
                                        <td>
                                        ${question.description}
                                        </td>
                                    </tr>
                                    <tr class="answer-row" style="text-align: left;">
                                        <td>
                                            <a class="btn" data-bs-toggle="collapse" href="#${question.questionId}" id="outline-button" role="button" aria-expanded="false" aria-controls="${question.questionId}">
                                            Show/Hide Answer
                                            </a>
                                            
                                            <div class="collapse" id="${question.questionId}">
                                            ${question.answer}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        `
                    );
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });
});