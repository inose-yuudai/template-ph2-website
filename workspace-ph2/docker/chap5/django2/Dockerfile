FROM python:3.10
WORKDIR /code
ADD requirements.txt /code/
RUN pip install -r requirements.txt
CMD ["python", "manage.py", "runserver", "o.o.o.o:8000"]
