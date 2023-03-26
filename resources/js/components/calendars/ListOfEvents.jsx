import { Tooltip } from "@material-tailwind/react";
import { useState } from "react";

import {
    ChevronRightIcon,
} from "@heroicons/react/24/outline";
import Form from "../Form/UseMultistepForm";

export default function ListOfEvents() {

    const [displayForm, setDisplayForm] = useState(false);
    const handleClick = () => {
        setDisplayForm(true);
      };
    return (
        <>
        <button className="border-2 w-full hover:bg-orange-100">
           <div className="flex px-5 py-3">
             <div className="flex flex-col items-start w-3/4 ">
                 <div className="font-bold text-gray-900 " >Walking Beer Tour</div>
                 <div className="text-gray-600 text-sm">6:00 PM</div>
             </div>
             <Tooltip 
                content="8 remaining" 
                placement="left-end"
                animate={{
                    mount: { scale: 1, y: -5 },
                    unmount: { scale: 0, y: 10 },
                  }}
            >
                <div className="flex font-bold items-center justify-around text-teal-800  w-1/4">
                    <div onClick={handleClick}>Available</div>
                    <ChevronRightIcon strokeWidth={2} className="h-5 w-5" /> 
                    
                </div>
             </Tooltip>
           </div>
        </button>
         {displayForm && <Form />}
         </>
    )
}