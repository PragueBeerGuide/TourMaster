import StickyNavbar from '../components/navbar/StickyNavbar';
import BookingEvent from '../components/calendars/BookingEvent';
import DemoComponent from '../components/calendars/DatePicker';
import Tour from '../components/tour/Tour';

function App() {

  return (

    <div>
      <StickyNavbar />

      <div className='flex mt-4'>
        <div>
          <Tour />
        </div>
        <div className='flex flex-col max-w-xs shadow-lg'>
          <DemoComponent />
        </div> 
      </div>  

    </div>
  )
}

export default App;