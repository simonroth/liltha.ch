<?php


/**
 * Base class that represents a row from the 'teacher' table.
 *
 *
 *
 * @package    propel.generator.liltha.om
 */
abstract class BaseTeacher extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TeacherPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TeacherPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the first_name field.
     * @var        string
     */
    protected $first_name;

    /**
     * The value for the last_name field.
     * @var        string
     */
    protected $last_name;

    /**
     * The value for the portrait_image field.
     * @var        string
     */
    protected $portrait_image;

    /**
     * The value for the bio field.
     * @var        string
     */
    protected $bio;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * @var        PropelObjectCollection|LessonToTeacher[] Collection to store aggregation of LessonToTeacher objects.
     */
    protected $collLessonToTeachers;
    protected $collLessonToTeachersPartial;

    /**
     * @var        PropelObjectCollection|Lesson[] Collection to store aggregation of Lesson objects.
     */
    protected $collLessons;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lessonsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lessonToTeachersScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * Get the [first_name] column value.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the [last_name] column value.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the [portrait_image] column value.
     *
     * @return string
     */
    public function getPortraitImage()
    {
        return $this->portrait_image;
    }

    /**
     * Get the [bio] column value.
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->url;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setID($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TeacherPeer::ID;
        }


        return $this;
    } // setID()

    /**
     * Set the value of [first_name] column.
     *
     * @param string $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setFirstName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->first_name !== $v) {
            $this->first_name = $v;
            $this->modifiedColumns[] = TeacherPeer::FIRST_NAME;
        }


        return $this;
    } // setFirstName()

    /**
     * Set the value of [last_name] column.
     *
     * @param string $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setLastName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->last_name !== $v) {
            $this->last_name = $v;
            $this->modifiedColumns[] = TeacherPeer::LAST_NAME;
        }


        return $this;
    } // setLastName()

    /**
     * Set the value of [portrait_image] column.
     *
     * @param string $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setPortraitImage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portrait_image !== $v) {
            $this->portrait_image = $v;
            $this->modifiedColumns[] = TeacherPeer::PORTRAIT_IMAGE;
        }


        return $this;
    } // setPortraitImage()

    /**
     * Set the value of [bio] column.
     *
     * @param string $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setBio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bio !== $v) {
            $this->bio = $v;
            $this->modifiedColumns[] = TeacherPeer::BIO;
        }


        return $this;
    } // setBio()

    /**
     * Set the value of [url] column.
     *
     * @param string $v new value
     * @return Teacher The current object (for fluent API support)
     */
    public function setURL($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = TeacherPeer::URL;
        }


        return $this;
    } // setURL()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->first_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->last_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->portrait_image = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->bio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 6; // 6 = TeacherPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Teacher object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TeacherPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TeacherPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collLessonToTeachers = null;

            $this->collLessons = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TeacherPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TeacherQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TeacherPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TeacherPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->lessonsScheduledForDeletion !== null) {
                if (!$this->lessonsScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->lessonsScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($remotePk, $pk);
                    }
                    LessonToTeacherQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->lessonsScheduledForDeletion = null;
                }

                foreach ($this->getLessons() as $lesson) {
                    if ($lesson->isModified()) {
                        $lesson->save($con);
                    }
                }
            } elseif ($this->collLessons) {
                foreach ($this->collLessons as $lesson) {
                    if ($lesson->isModified()) {
                        $lesson->save($con);
                    }
                }
            }

            if ($this->lessonToTeachersScheduledForDeletion !== null) {
                if (!$this->lessonToTeachersScheduledForDeletion->isEmpty()) {
                    LessonToTeacherQuery::create()
                        ->filterByPrimaryKeys($this->lessonToTeachersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lessonToTeachersScheduledForDeletion = null;
                }
            }

            if ($this->collLessonToTeachers !== null) {
                foreach ($this->collLessonToTeachers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = TeacherPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TeacherPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TeacherPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(TeacherPeer::FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`first_name`';
        }
        if ($this->isColumnModified(TeacherPeer::LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`last_name`';
        }
        if ($this->isColumnModified(TeacherPeer::PORTRAIT_IMAGE)) {
            $modifiedColumns[':p' . $index++]  = '`portrait_image`';
        }
        if ($this->isColumnModified(TeacherPeer::BIO)) {
            $modifiedColumns[':p' . $index++]  = '`bio`';
        }
        if ($this->isColumnModified(TeacherPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }

        $sql = sprintf(
            'INSERT INTO `teacher` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`first_name`':
                        $stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
                        break;
                    case '`last_name`':
                        $stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
                        break;
                    case '`portrait_image`':
                        $stmt->bindValue($identifier, $this->portrait_image, PDO::PARAM_STR);
                        break;
                    case '`bio`':
                        $stmt->bindValue($identifier, $this->bio, PDO::PARAM_STR);
                        break;
                    case '`url`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setID($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = TeacherPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLessonToTeachers !== null) {
                    foreach ($this->collLessonToTeachers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TeacherPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getID();
                break;
            case 1:
                return $this->getFirstName();
                break;
            case 2:
                return $this->getLastName();
                break;
            case 3:
                return $this->getPortraitImage();
                break;
            case 4:
                return $this->getBio();
                break;
            case 5:
                return $this->getURL();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Teacher'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Teacher'][$this->getPrimaryKey()] = true;
        $keys = TeacherPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getID(),
            $keys[1] => $this->getFirstName(),
            $keys[2] => $this->getLastName(),
            $keys[3] => $this->getPortraitImage(),
            $keys[4] => $this->getBio(),
            $keys[5] => $this->getURL(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collLessonToTeachers) {
                $result['LessonToTeachers'] = $this->collLessonToTeachers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TeacherPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setID($value);
                break;
            case 1:
                $this->setFirstName($value);
                break;
            case 2:
                $this->setLastName($value);
                break;
            case 3:
                $this->setPortraitImage($value);
                break;
            case 4:
                $this->setBio($value);
                break;
            case 5:
                $this->setURL($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TeacherPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setID($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFirstName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLastName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPortraitImage($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setURL($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TeacherPeer::DATABASE_NAME);

        if ($this->isColumnModified(TeacherPeer::ID)) $criteria->add(TeacherPeer::ID, $this->id);
        if ($this->isColumnModified(TeacherPeer::FIRST_NAME)) $criteria->add(TeacherPeer::FIRST_NAME, $this->first_name);
        if ($this->isColumnModified(TeacherPeer::LAST_NAME)) $criteria->add(TeacherPeer::LAST_NAME, $this->last_name);
        if ($this->isColumnModified(TeacherPeer::PORTRAIT_IMAGE)) $criteria->add(TeacherPeer::PORTRAIT_IMAGE, $this->portrait_image);
        if ($this->isColumnModified(TeacherPeer::BIO)) $criteria->add(TeacherPeer::BIO, $this->bio);
        if ($this->isColumnModified(TeacherPeer::URL)) $criteria->add(TeacherPeer::URL, $this->url);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TeacherPeer::DATABASE_NAME);
        $criteria->add(TeacherPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getID();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setID($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getID();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Teacher (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFirstName($this->getFirstName());
        $copyObj->setLastName($this->getLastName());
        $copyObj->setPortraitImage($this->getPortraitImage());
        $copyObj->setBio($this->getBio());
        $copyObj->setURL($this->getURL());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLessonToTeachers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLessonToTeacher($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setID(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Teacher Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return TeacherPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TeacherPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('LessonToTeacher' == $relationName) {
            $this->initLessonToTeachers();
        }
    }

    /**
     * Clears out the collLessonToTeachers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Teacher The current object (for fluent API support)
     * @see        addLessonToTeachers()
     */
    public function clearLessonToTeachers()
    {
        $this->collLessonToTeachers = null; // important to set this to null since that means it is uninitialized
        $this->collLessonToTeachersPartial = null;

        return $this;
    }

    /**
     * reset is the collLessonToTeachers collection loaded partially
     *
     * @return void
     */
    public function resetPartialLessonToTeachers($v = true)
    {
        $this->collLessonToTeachersPartial = $v;
    }

    /**
     * Initializes the collLessonToTeachers collection.
     *
     * By default this just sets the collLessonToTeachers collection to an empty array (like clearcollLessonToTeachers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLessonToTeachers($overrideExisting = true)
    {
        if (null !== $this->collLessonToTeachers && !$overrideExisting) {
            return;
        }
        $this->collLessonToTeachers = new PropelObjectCollection();
        $this->collLessonToTeachers->setModel('LessonToTeacher');
    }

    /**
     * Gets an array of LessonToTeacher objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Teacher is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LessonToTeacher[] List of LessonToTeacher objects
     * @throws PropelException
     */
    public function getLessonToTeachers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLessonToTeachersPartial && !$this->isNew();
        if (null === $this->collLessonToTeachers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLessonToTeachers) {
                // return empty collection
                $this->initLessonToTeachers();
            } else {
                $collLessonToTeachers = LessonToTeacherQuery::create(null, $criteria)
                    ->filterByTeacher($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLessonToTeachersPartial && count($collLessonToTeachers)) {
                      $this->initLessonToTeachers(false);

                      foreach($collLessonToTeachers as $obj) {
                        if (false == $this->collLessonToTeachers->contains($obj)) {
                          $this->collLessonToTeachers->append($obj);
                        }
                      }

                      $this->collLessonToTeachersPartial = true;
                    }

                    $collLessonToTeachers->getInternalIterator()->rewind();
                    return $collLessonToTeachers;
                }

                if($partial && $this->collLessonToTeachers) {
                    foreach($this->collLessonToTeachers as $obj) {
                        if($obj->isNew()) {
                            $collLessonToTeachers[] = $obj;
                        }
                    }
                }

                $this->collLessonToTeachers = $collLessonToTeachers;
                $this->collLessonToTeachersPartial = false;
            }
        }

        return $this->collLessonToTeachers;
    }

    /**
     * Sets a collection of LessonToTeacher objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lessonToTeachers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Teacher The current object (for fluent API support)
     */
    public function setLessonToTeachers(PropelCollection $lessonToTeachers, PropelPDO $con = null)
    {
        $lessonToTeachersToDelete = $this->getLessonToTeachers(new Criteria(), $con)->diff($lessonToTeachers);

        $this->lessonToTeachersScheduledForDeletion = unserialize(serialize($lessonToTeachersToDelete));

        foreach ($lessonToTeachersToDelete as $lessonToTeacherRemoved) {
            $lessonToTeacherRemoved->setTeacher(null);
        }

        $this->collLessonToTeachers = null;
        foreach ($lessonToTeachers as $lessonToTeacher) {
            $this->addLessonToTeacher($lessonToTeacher);
        }

        $this->collLessonToTeachers = $lessonToTeachers;
        $this->collLessonToTeachersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LessonToTeacher objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LessonToTeacher objects.
     * @throws PropelException
     */
    public function countLessonToTeachers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLessonToTeachersPartial && !$this->isNew();
        if (null === $this->collLessonToTeachers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLessonToTeachers) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getLessonToTeachers());
            }
            $query = LessonToTeacherQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTeacher($this)
                ->count($con);
        }

        return count($this->collLessonToTeachers);
    }

    /**
     * Method called to associate a LessonToTeacher object to this object
     * through the LessonToTeacher foreign key attribute.
     *
     * @param    LessonToTeacher $l LessonToTeacher
     * @return Teacher The current object (for fluent API support)
     */
    public function addLessonToTeacher(LessonToTeacher $l)
    {
        if ($this->collLessonToTeachers === null) {
            $this->initLessonToTeachers();
            $this->collLessonToTeachersPartial = true;
        }
        if (!in_array($l, $this->collLessonToTeachers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLessonToTeacher($l);
        }

        return $this;
    }

    /**
     * @param	LessonToTeacher $lessonToTeacher The lessonToTeacher object to add.
     */
    protected function doAddLessonToTeacher($lessonToTeacher)
    {
        $this->collLessonToTeachers[]= $lessonToTeacher;
        $lessonToTeacher->setTeacher($this);
    }

    /**
     * @param	LessonToTeacher $lessonToTeacher The lessonToTeacher object to remove.
     * @return Teacher The current object (for fluent API support)
     */
    public function removeLessonToTeacher($lessonToTeacher)
    {
        if ($this->getLessonToTeachers()->contains($lessonToTeacher)) {
            $this->collLessonToTeachers->remove($this->collLessonToTeachers->search($lessonToTeacher));
            if (null === $this->lessonToTeachersScheduledForDeletion) {
                $this->lessonToTeachersScheduledForDeletion = clone $this->collLessonToTeachers;
                $this->lessonToTeachersScheduledForDeletion->clear();
            }
            $this->lessonToTeachersScheduledForDeletion[]= clone $lessonToTeacher;
            $lessonToTeacher->setTeacher(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Teacher is new, it will return
     * an empty collection; or if this Teacher has previously
     * been saved, it will retrieve related LessonToTeachers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Teacher.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LessonToTeacher[] List of LessonToTeacher objects
     */
    public function getLessonToTeachersJoinLesson($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LessonToTeacherQuery::create(null, $criteria);
        $query->joinWith('Lesson', $join_behavior);

        return $this->getLessonToTeachers($query, $con);
    }

    /**
     * Clears out the collLessons collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Teacher The current object (for fluent API support)
     * @see        addLessons()
     */
    public function clearLessons()
    {
        $this->collLessons = null; // important to set this to null since that means it is uninitialized
        $this->collLessonsPartial = null;

        return $this;
    }

    /**
     * Initializes the collLessons collection.
     *
     * By default this just sets the collLessons collection to an empty collection (like clearLessons());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initLessons()
    {
        $this->collLessons = new PropelObjectCollection();
        $this->collLessons->setModel('Lesson');
    }

    /**
     * Gets a collection of Lesson objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Teacher is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Lesson[] List of Lesson objects
     */
    public function getLessons($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collLessons || null !== $criteria) {
            if ($this->isNew() && null === $this->collLessons) {
                // return empty collection
                $this->initLessons();
            } else {
                $collLessons = LessonQuery::create(null, $criteria)
                    ->filterByTeacher($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collLessons;
                }
                $this->collLessons = $collLessons;
            }
        }

        return $this->collLessons;
    }

    /**
     * Sets a collection of Lesson objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lessons A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Teacher The current object (for fluent API support)
     */
    public function setLessons(PropelCollection $lessons, PropelPDO $con = null)
    {
        $this->clearLessons();
        $currentLessons = $this->getLessons();

        $this->lessonsScheduledForDeletion = $currentLessons->diff($lessons);

        foreach ($lessons as $lesson) {
            if (!$currentLessons->contains($lesson)) {
                $this->doAddLesson($lesson);
            }
        }

        $this->collLessons = $lessons;

        return $this;
    }

    /**
     * Gets the number of Lesson objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Lesson objects
     */
    public function countLessons($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collLessons || null !== $criteria) {
            if ($this->isNew() && null === $this->collLessons) {
                return 0;
            } else {
                $query = LessonQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByTeacher($this)
                    ->count($con);
            }
        } else {
            return count($this->collLessons);
        }
    }

    /**
     * Associate a Lesson object to this object
     * through the lesson_to_teacher cross reference table.
     *
     * @param  Lesson $lesson The LessonToTeacher object to relate
     * @return Teacher The current object (for fluent API support)
     */
    public function addLesson(Lesson $lesson)
    {
        if ($this->collLessons === null) {
            $this->initLessons();
        }
        if (!$this->collLessons->contains($lesson)) { // only add it if the **same** object is not already associated
            $this->doAddLesson($lesson);

            $this->collLessons[]= $lesson;
        }

        return $this;
    }

    /**
     * @param	Lesson $lesson The lesson object to add.
     */
    protected function doAddLesson($lesson)
    {
        $lessonToTeacher = new LessonToTeacher();
        $lessonToTeacher->setLesson($lesson);
        $this->addLessonToTeacher($lessonToTeacher);
    }

    /**
     * Remove a Lesson object to this object
     * through the lesson_to_teacher cross reference table.
     *
     * @param Lesson $lesson The LessonToTeacher object to relate
     * @return Teacher The current object (for fluent API support)
     */
    public function removeLesson(Lesson $lesson)
    {
        if ($this->getLessons()->contains($lesson)) {
            $this->collLessons->remove($this->collLessons->search($lesson));
            if (null === $this->lessonsScheduledForDeletion) {
                $this->lessonsScheduledForDeletion = clone $this->collLessons;
                $this->lessonsScheduledForDeletion->clear();
            }
            $this->lessonsScheduledForDeletion[]= $lesson;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->portrait_image = null;
        $this->bio = null;
        $this->url = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collLessonToTeachers) {
                foreach ($this->collLessonToTeachers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLessons) {
                foreach ($this->collLessons as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLessonToTeachers instanceof PropelCollection) {
            $this->collLessonToTeachers->clearIterator();
        }
        $this->collLessonToTeachers = null;
        if ($this->collLessons instanceof PropelCollection) {
            $this->collLessons->clearIterator();
        }
        $this->collLessons = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TeacherPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
