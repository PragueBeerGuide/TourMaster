import { useState } from "react";

import Datepicker from "tailwind-datepicker-react"

export default function DemoComponent() {

    const options = {
        title: "Calendar",
        autoHide: false,
        todayButton: true,
        clearBtn: false,
        maxDate: new Date("2030-01-01"),
        minDate: new Date("2023-01-01"),
        theme: {
            background: "bg-gray-700 dark:bg-gray-800",
            todayBtn: "",
            clearBtn: "",
            icons: "",
            text: "",
            disabledText: "bg-red-500",
            input: "",
            inputIcon: "",
            selected: "",
        },
        icons: {
            // () => ReactElement | JSX.Element
            prev: () => <span>Previous</span>,
            next: () => <span>Next</span>,
        },
        datepickerClassNames: "top-12",
        defaultDate: new Date("2022-01-01"),
        language: "en",
    }
    
    
    const [show, setShow] = useState(false);
    const handleChange = () => {
            console.log(selectedDate)
    }
    const handleClose = () => {
        setShow(state)
    }
    
    return (
        <div>
            <Datepicker options={options} onChange={handleChange} show={show} setShow={handleClose} />
        </div>
    )
}