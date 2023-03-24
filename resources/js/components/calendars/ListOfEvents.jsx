import {
    ChevronRightIcon,
  } from "@heroicons/react/24/outline";

export default function ListOfEvents() {

    return (
        <button className="border-2 w-full hover:bg-orange-100">
           <div className="flex p-3">
             <div className="flex flex-col items-start w-3/4 ">
                 <div className="font-bold text-gray-900 " >Walking Beer Tour</div>
                 <div className="text-gray-600 text-sm">6:00 PM</div>
             </div>
             <div className="flex font-bold items-center justify-around text-teal-800  w-1/4">
                 <div>Available</div>
                 <ChevronRightIcon strokeWidth={2} className="h-5 w-5" /> 
             </div>
           </div>
        </button>
    )
}