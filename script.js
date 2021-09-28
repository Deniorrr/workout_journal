class Exercise_adder{
    constructor(){
        this.iterator = 1
        this.doc_element = document.getElementsByClassName("form-table")[0]
        this.columns = ['exercise', 'weight','reps', 'sets', 'time']
        this.row_content = ""
        this.generate_row_content(0)
    }
    generate_row_content(row_number){
        this.row_content = "<tr>"
        this.columns.forEach(element => this.row_content += `<td><input type="text" style="width:100%" name="${element+row_number}" id="${element+row_number}" placeholder="${element+row_number}"></td>`)
        this.row_content += "</tr>"
    }
    add_row(){
        this.doc_element.innerHTML += this.row_content
    }
}

const exercise_adder = new Exercise_adder
exercise_adder.add_row()

function add_row(){
    exercise_adder.generate_row_content(exercise_adder.iterator++)
    exercise_adder.add_row()
}