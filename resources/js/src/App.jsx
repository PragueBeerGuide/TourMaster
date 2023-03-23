import StickyNavbar from "../components/navbar/StickyNavbar";
import Tour from "../components/tour/Tour";

function App() {

  return (
    <>
      <StickyNavbar />
      <div className="bg-red-400">
          <h1 className="text-4xl font-bold underline">
            Hello world!
          </h1>
          <p className="text-slate-600 text-xl">I wish this Tailwind styling would finally work....</p>
      </div>
      <Tour />
    </>
  )
}

export default App;