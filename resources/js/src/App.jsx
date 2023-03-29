import { Routes, Route, Navigate } from "react-router-dom";
import CustomCalendar from "../components/calendars/Calendar";
import { Dashboard, Auth } from "../layouts";
import Home from "../pages/home/Home";
import Tours from "../pages/tours/Tours";

function App() {
    return (
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/calendar/:tourId" element={<CustomCalendar />} />

            <Route path="/beer-tours" element={<Tours />} />
            <Route path="/dashboard/*" element={<Dashboard />} />
            <Route path="/auth/*" element={<Auth />} />
            {/* <Route path="*" element={<Navigate to="/dashboard/home" replace />} /> */}
        </Routes>
    );
}

export default App;
