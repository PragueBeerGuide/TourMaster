import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import 'react-calendar/dist/Calendar.css';





export function Booking(){
    const [dateState, setDateState] = useState(new Date())

    const changeDate = (e) => {
        setDateState(e)
      }
return (
    <>
      
     
          <Calendar  value={dateState} onChange={changeDate} />
       
   


   
   </>

)
}